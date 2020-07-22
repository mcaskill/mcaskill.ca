<?php

class Value
{
    /**
     * The primitive value.
     *
     * @var mixed
     */
    private $data;

    /**
     * The locales of the primitive value.
     *
     * @var string[]
     */
    private $locales;

    /**
     * @param mixed $data The primitive value.
     */
    public function __construct($data)
    {
        if (is_object($data) && (property_exists($data, '@en') || property_exists($data, '@fr'))) {
            $data = get_object_vars($data);
        } else {
            $data = [
                '@en' => $data,
            ];
        }

        $this->data    = $data;
        $this->locales = array_keys($data);
    }

    /**
     * Retrieves a string representing the value.
     *
     * @return mixed
     */
    public function __toString()
    {
        if ($this->locales) {
            $key = $this->locales[0];
            if (isset($this->data[$key])) {
                return $this->data[$key];
            }
        }

        return '';
    }

    /**
     * Retrieves a string representing the value.
     *
     * This method is meant to be overridden by derived objects for locale-specific purposes.
     *
     * @param  mixed $locales Optional.
     *     A string with a BCP 47 language tag, or an array of such strings.
     * @array  array $options Optional.
     *     An object with some or all of the following properties:
     * @return string|null A string with a language-sensitive representation of the given number.
     */
    public function toLocaleString($locales = null, array $options = [])
    {
        $locales = (array) $locales;
        foreach ($locales as $locale) {
            $key = '@'.$locale;
            if (isset($this->data[$key])) {
                return $this->data[$key];
            }
        }

        return null;
    }

    /**
     * Retrieves a string representing the BCP 47 language tag of the value.
     *
     * @return string|null
     */
    public function localeOf()
    {
        return $this->locales ? substr($this->locales[0], 1) : null;
    }

    /**
     * @param  mixed $data The primitive value.
     * @return ?static
     */
    public static function create($data)
    {
        if ($data !== null) {
            $data = new static($data);
        }

        return $data;
    }
}

class DateRangeCollection
{
    /**
     * @var DateRange[]
     */
    private $ranges = [];

    /**
     * @param  array $collection
     * @throws InvalidArgumentException if no ranges are given.
     */
    public function __construct(...$collection)
    {
        if (count($collection) === 0) {
            throw new InvalidArgumentException('Expected at least one date range');
        }

        foreach ($collection as $range) {
            $this->ranges[] = DateRange::create($range);
        }

        usort($this->ranges, function (DateRange $a, DateRange $b) {
            return DateRange::compare($a, $b);
        });
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getRange();
    }

    /**
     * @param  array $ranges
     * @return static
     */
    public function add(array $ranges)
    {
        return new static(
            array_merge(
                $this->ranges,
                $ranges
            )
        );
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return reset($this->ranges)->getFrom();
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return end($this->ranges)->getUntil();
    }

    /**
     * @return DateRange
     */
    public function getRange()
    {
        return DateRange::create([ $this->getFrom(), $this->getUntil() ]);
    }
}

class DateRange
{
    const REGEX_DATE   = '/^(?<Y>\d{4})(?:-(?<m>\d{2})(?:-(?<d>\d{2}))?)?$/';
    const OPEN_DATE    = '..';
    const UNKNOWN_DATE = '.';

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $until;

    /**
     * @param  mixed   $from  The date/time value or range.
     * @param  ?string $until The date/time value.
     * @throws InvalidArgumentException if range is invalid.
     */
    public function __construct($from, $until = null)
    {
        if ($until === null) {
            if (is_string($from)) {
                list($this->from, $this->until) = static::splitRange($from);
                return;
            }

            if (is_array($from)) {
                list($this->from, $this->until) = $from;
                return;
            }
        }

        if (is_string($from) && is_string($until)) {
            $this->from  = $from;
            $this->until = $until;
            return;
        }

        throw new InvalidArgumentException('Expected ISO-8601-2 string or array with exactly 2 items');
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getRange();
    }

    /**
     * @return ?string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return ?string
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @return ?string
     */
    public function getRange()
    {
        if ($this->from === null) {
            return $this->until;
        }

        if ($this->until === null) {
            return $this->from;
        }

        return $this->from . '/' . $this->until;
    }

    /**
     * @param  ?string $format
     * @param  ?string $present
     * @return string
     */
    public function format($format = null, $present = null)
    {
        return static::formatRange($this->from, $this->until, $format, $present);
    }

    /**
     * @param  array|self $a
     * @param  array|self $b
     * @return int
     */
    public static function compare($a, $b)
    {
        $a = static::create($a);
        $b = static::create($b);

        $fromA  = static::createDateTime($a->getFrom());
        $fromB  = static::createDateTime($b->getFrom());
        $untilA = static::createDateTime($a->getUntil());
        $untilB = static::createDateTime($b->getUntil());

        // by from (NULL first)
        if (!$fromA && $fromB) {
            return -1;
        } else if ($fromA && !$fromB) {
            return 1;
        } else if ($fromA && $fromB) {
            // ASC by from
            if ($fromA < $fromB) {
                return -1;
            } else if ($fromA > $fromB) {
                return 1;
            }
        }

        // by to (NULL last)
        if (!$untilA && $untilB) {
            return 1;
        } else if ($untilA && !$untilB) {
            return -1;
        } else if ($untilA && $untilB) {
            // ASC by to
            if ($untilA < $untilB) {
                return -1;
            } else if ($untilA > $untilB) {
                return 1;
            }
        }

        return 0;
    }

    /**
     * @return string[]
     */
    public static function splitRange($time)
    {
        return array_pad(explode('/', $time), 2, null);
    }

    /**
     * @return ?array
     */
    public static function splitDate($time)
    {
        if (preg_match(static::REGEX_DATE, $time, $parts)) {
            return $parts;
        }

        return null;
    }

    /**
     * @param  string  $time
     * @param  ?string $format
     * @return string
     */
    public static function formatDate($time, $format = null)
    {
        $parts = static::splitDate($time);
        if (is_array($parts)) {
            if (isset($parts['Y'], $parts['m'], $parts['d'])) {
                $date = new DateTimeImmutable($time);
                return $date->format($format ?: 'j F Y');
            } elseif (isset($parts['Y'], $parts['m'])) {
                $date = new DateTimeImmutable($time);
                return $date->format($format ?: 'F Y');
            } elseif (isset($parts['Y'])) {
                return $parts['Y'];
            }
        }

        return null;
    }

    /**
     * @param  string  $from
     * @param  string  $until
     * @param  ?string $format
     * @param  ?string $present
     * @return string
     */
    public static function formatRange($from, $until, $format = null, $present = null)
    {
        $time = static::formatDate($from, $format);
        if ($until) {
            if ($until === static::OPEN_DATE) {
                $time .= '–' . ($present ? date($present) : 'Ongoing');
            } else {
                $time .= '–' . static::formatDate($until, $format);
            }
        }

        return $time;
    }

    /**
     * @param  string $time A date/time value.
     * @return ?DateTimeInterface
     */
    public static function createDateTime($time)
    {
        if ($time instanceof DateTimeInterface) {
            return $time;
        }

        if ($time === static::OPEN_DATE) {
            $time = 'now';
        }

        return new DateTimeImmutable($time);
    }

    /**
     * @param  mixed $range A date/time range.
     * @return ?static
     */
    public static function create($range)
    {
        if ($range instanceof self) {
            return $range;
        }

        if (is_string($range)) {
            return new static($range);
        }

        if (is_array($range) && count($range) === 2) {
            return new static(...$range);
        }

        return null;
    }
}

class HTML
{
    /**
     * Render an HTML anchor element.
     *
     * @param  Value $href The URI of the elemet.
     * @param  Value $text The text node of the element.
     * @return string An HTML anchor element.
     */
    public static function anchor($href, $text = null) : ?string
    {
        if (empty($href)) {
            return $text;
        }

        $uri = parse_url($href);
        $uri['host'] = $uri['host'] ?? null;
        $uri['path'] = $uri['path'] ?? null;

        $rel = null;
        if ($uri['host'] !== getenv('SERVER_NAME')) {
            $rel = 'noreferrer noopener';
        }

        if ($text === null) {
            $text = $uri['host'] ?? $uri['path'] ?? null;
        }

        $attr = [
            'href'     => $href,
            'hreflang' => static::locale($href),
            'target'   => null,
            'rel'      => $rel,
            'lang'     => static::locale($text),
        ];

        return static::element('a', $attr, $text);
    }

    /**
     * Render an HTML element.
     *
     * @param  string $tag  The HTML tag name of the element.
     * @param  array  $attr The HTML attributes of the element.
     * @param  mixed  $text The text node of the element.
     *     Pass FALSE to render a self-closing element.
     * @return string An HTML element.
     */
    public static function element(string $tag, array $attr = [], $text = null) : ?string
    {
        if (empty($tag)) {
            throw new Exception('Empty HTML tag name');
        }

        $elem = [
            '%tag'  => $tag,
            '%text' => $text,
            '%attr' => static::attr($attr),
        ];

        if ($text === false) {
            $html = '<%tag%attr />';
        } else {
            $html = '<%tag%attr>%text</%tag>';
        }

        return strtr($html, $elem);
    }

    /**
     * Render an HTML time element.
     *
     * @param  DateTimeInterface $time The date/time value.
     * @param  Value             $text The text node of the element.
     * @return string An HTML time element.
     */
    public static function time($time, $text = null) : ?string
    {
        if ($time instanceof DateRange) {
            if ($text === null) {
                $text = $time->format();
            }

            $time = $time->getRange();
        } elseif (is_string($time) && $text === null) {
            $range = DateRange::splitRange($time);
            $text  = DateRange::formatRange(...$range);
        }

        $attr = [
            'datetime' => $time,
            'lang'     => static::locale($text),
        ];

        return static::element('time', $attr, $text);
    }

    /**
     * Render an HTML icon element.
     *
     * @param  string $icon The icon value.
     * @return string An HTML span element.
     */
    public static function icon($icon) : ?string
    {
        if (empty($icon)) {
            return null;
        }

        $elem = [
            '%icon' => $icon,
        ];

        $html = '<span role="img" aria-hidden="true">%icon</span>';

        return strtr($html, $elem);
    }

    /**
     * Retrieves a string representing the BCP 47 language tag of the value.
     *
     * @param  Value $value A value to resolve.
     * @return string|null A value that is not the current locale.
     */
    protected static function locale($value) : ?string
    {
        if ($value instanceof Value) {
            $locale = $value->localeOf();
            if ($locale !== 'en') {
                return $locale;
            }
        }

        return null;
    }

    /**
     * Render an associative array as a string of HTML attributes.
     *
     * @param  array $attrs Associative array of HTML attributes.
     * @return string A string of HTML attributes.
     */
    protected static function attr(array $attrs) : ?string
    {
        $html = '';

        foreach ($attrs as $attr => $val) {
            if ($val !== null) {
                if (is_bool($val)) {
                    if ($val === true) {
                        $html .= ' ' . $attr;
                    }
                } else {
                    $val   = htmlspecialchars($val, ENT_QUOTES);
                    $html .= sprintf(' %s="%s"', $attr, $val);
                }
            }
        }

        return $html;
    }
}
