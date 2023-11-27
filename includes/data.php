<?php

/** @todo PHP8: Replace with Enum */
define('MC_WORK_TYPE_AVOCATION',     'AVOCATION');
define('MC_WORK_TYPE_OCCUPATION',    'OCCUPATION');
define('MC_PROJECT_STATUS_ACTIVE',   'ACTIVE');
define('MC_PROJECT_STATUS_REPLACED', 'REPLACED');
define('MC_PROJECT_STATUS_DEAD',     'DEAD');

return [
	'site' => [
		'description' => 'The personal Web site of Chauncey McAskill, hobbyist and Web developer.',
		'icons'       => [
			'🌀',
			'🎒',
			'🧠',
			'☕️',
			'🛠',
			'🧰',
			'🖥',
			'🍺',
			'⚙️',
			'⌨️',
			'💻',
			'🌎',
			'🥃',
			'🌑',
			'✊🏾',
			'🇨🇦',
		],
	],
	'author'   => [
		'avatar'   => '/assets/images/mcaskill-by-makowwka.png',
		'handle'   => 'mcaskill',
		'name'     => 'Chauncey McAskill',
		'location' => 'Montréal, QC',
		'role'     => 'Web Generalist',
	],
	'channels' => [
		'email' => [
			// 'icon'  => '📧',
			'label' => 'chauncey@mcaskill.ca',
			'url'   => 'mailto:chauncey@mcaskill.ca?subject=Hi+Chauncey!',
		],
	],
	'profiles' => [
		'github' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🐙',
			'label'  => 'GitHub',
			'show'   => true,
			'url'    => 'https://github.com/mcaskill',
		],
		'gitlab' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🦊',
			'label'  => 'GitLab',
			'show'   => false,
			'url'    => 'https://gitlab.com/mcaskill',
		],
		'bitbucket' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🗑',
			'label'  => 'Bitbucket',
			'show'   => false,
			'url'    => 'https://bitbucket.org/mcaskill',
		],
		'sourcehut' => [
			'handle' => 'mcaskill',
			// 'icon'   => '⭕️',
			'label'  => 'Sourcehut',
			'show'   => false,
			'url'    => 'https://sr.ht/~mcaskill/',
		],
		'packagist' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🐘',
			'label'  => 'Packagist',
			'show'   => true,
			'url'    => 'https://packagist.org/packages/mcaskill/',
		],
		'npm' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🐨', // Replace with Wombat if ever an emoji becomes available
			'label'  => 'NPM',
			'show'   => true,
			'url'    => 'https://npmjs.com/~mcaskill',
		],
		'stackoverflow' => [
			'handle' => 'chauncey-mcaskill',
			// 'icon'   => '📚',
			'label'  => 'Stack Overflow',
			'show'   => true,
			'url'    => 'https://stackoverflow.com/users/140357/chauncey-mcaskill',
		],
		'stackexchange' => [
			'handle' => 'chauncey-mcaskill',
			// 'icon'   => '📚',
			'label'  => 'Stack Exchange',
			'show'   => false,
			'url'    => 'https://stackexchange.com/users/47401/chauncey-mcaskill',
		],
		'codepen' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🧺', // Replace with outline cube if ever an emoji becomes available
			'label'  => 'CodePen',
			'show'   => false,
			'url'    => 'https://codepen.io/mcaskill',
		],
		'wordpress' => [
			'handle' => 'mcaskill',
			// 'icon'   => '𝒘',
			// 'icon'   => 'Ⓦ',
			'label'  => 'WordPress.org',
			'show'   => false,
			'url'    => 'https://profiles.wordpress.org/mcaskill/',
		],
		'gravatar' => [
			'handle' => 'cmcaskill',
			// 'icon'   => 'Ⓖ',
			'label'  => 'Gravatar',
			'show'   => false,
			'url'    => 'https://gravatar.com/4ccef955dfce263cdb356a097d7c9eb2',
		],
		'letterboxd' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🎬',
			'label'  => 'Letterboxd',
			'show'   => true,
			'url'    => 'https://letterboxd.com/mcaskill',
		],
		'mastodon' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🐘',
			'label'  => 'Mastodon',
			'show'   => true,
			'url'    => 'https://mastodon.social/@mcaskill',
		],
		'twitter' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🐦',
			'label'  => 'Twitter',
			'show'   => false,
			'url'    => 'https://twitter.com/mcaskill',
		],
		'discord' => [
			'handle' => '_mcaskill',
			// 'icon'   => '💬',
			'label'  => 'Discord',
			'show'   => false,
			'url'    => 'https://discord.com/users/_mcaskill',
		],
		'kiva' => [
			'handle' => 'mcaskill',
			// 'icon'   => '🍃',
			'label'  => 'Kiva',
			'show'   => false,
			'url'    => 'https://kiva.org/lender/mcaskill',
		],
		'buymeacoffee' => [
			'handle' => 'mcaskill',
			// 'icon'   => '☕️',
			'label'  => 'Buy Me A Coffee',
			'show'   => false,
			'url'    => 'https://buymeacoffee.com/mcaskill',
		],
		'keybase' => [
			'handle' => 'mcaskill',
			'icon'   => '🔑',
			'label'  => 'Keybase',
			'show'   => false,
			'url'    => 'https://keybase.io/mcaskill',
		],
	],
	'work' => [
		[
			'name' => 'Personal',
			'periods' => [
				'2008-01/..',
			],
			'type' => MC_WORK_TYPE_AVOCATION,
			'roles' => [
				'Designer',
				'Frontend Developer',
				'Backend Developer',
			],
			'url' => NULL,
			'projects' => [
				[
					'name' => 'mcaskill/composer-exclude-files',
					'description' => 'A Composer plugin for excluding files required by packages using the <code>files</code> autoloading mechanism.',
					'periods' => [
						'2018/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'PHP',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Open Source',
						],
						'subjects' => [
							'Tool',
							'Web Development',
						],
					],
					'links' => [
						[
							'label' => 'GitHub',
							'url'   => 'https://github.com/mcaskill/composer-plugin-exclude-files',
						],
						[
							'label' => 'Packagist',
							'url'   => 'https://packagist.org/packages/mcaskill/composer-exclude-files',
						],
					],
					'icon' => '🧑‍💻',
				],
				[
					'name' => 'mcaskill/js-html-build-attributes',
					'description' => 'A JS library for generating a string of HTML attributes.',
					'periods' => [
						'2022/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'HTML',
						'JS',
					],
					'roles' => [
						'Frontend Developer',
					],
					'categories' => [
						'types' => [
							'Open Source',
						],
						'subjects' => [
							'Tool',
							'Web Development',
						],
					],
					'links' => [
						[
							'label' => 'GitHub',
							'url'   => 'https://github.com/mcaskill/js-html-build-attributes',
						],
						[
							'label' => 'NPM',
							'url'   => 'https://npmjs.com/package/@mcaskill/html-build-attributes',
						],
					],
					'icon' => '🧑‍💻',
				],
				[
					'name' => 'mcaskill/php-html-build-attributes',
					'description' => 'A PHP library for generating a string of HTML attributes.',
					'periods' => [
						'2016/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'HTML',
						'PHP',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Open Source',
						],
						'subjects' => [
							'Tool',
							'Web Development',
						],
					],
					'links' => [
						[
							'label' => 'GitHub',
							'url'   => 'https://github.com/mcaskill/php-html-build-attributes',
						],
						[
							'label' => 'Packagist',
							'url'   => 'https://packagist.org/packages/mcaskill/php-html-build-attributes',
						],
					],
					'icon' => '🧑‍💻',
				],
				[
					'name' => 'mcaskill/sass-mq',
					'description' => ' A Sass library that helps manipulating media queries in an elegant way. A fork of <a href="https://github.com/sass-mq/sass-mq">sass-mq</a>.',
					'periods' => [
						'2015/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'CSS',
						'SCSS',
					],
					'roles' => [
						'Frontend Developer',
					],
					'categories' => [
						'types' => [
							'Open Source',
						],
						'subjects' => [
							'Tool',
							'Web Development',
						],
					],
					'links' => [
						[
							'label' => 'GitHub',
							'url'   => 'https://github.com/mcaskill/sass-mq',
						],
						[
							'label' => 'NPM',
							'url'   => 'https://npmjs.com/package/@mcaskill/sass-mq',
						],
					],
					'icon' => '🦸',
				],
			],
		],
		[
			'name' => 'Locomotive',
			'periods' => [
				'2009-03/2012-06',
				'2013-12/..',
			],
			'type' => MC_WORK_TYPE_OCCUPATION,
			'roles' => [
				'Frontend Developer',
				'Backend Developer',
			],
			'url' => [
				'@en' => 'https://locomotive.ca/en',
				'@fr' => 'https://locomotive.ca/fr',
			],
			'projects' => [
				[
					'name' => 'Charcoal Web Framework',
					'description' => 'An open-source CMS/CMF framework for PHP.',
					'periods' => [
						'2016/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'PHP',
						'MySQL',
					],
					'client' => 'Locomotive Inc.',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Open Source',
							'Web Framework',
						],
						'subjects' => [
							'Technology',
							'Web Development',
						],
					],
					'links' => [
						[
							'label' => 'Charcoal PHP',
							'url'   => [
								'@en' => 'https://charcoal.locomotive.ca/en',
								'@fr' => 'https://charcoal.locomotive.ca/fr',
							],
						],
						[
							'label' => 'GitHub',
							'url'   => 'https://github.com/charcoalphp/charcoal',
						],
						[
							'label' => 'Packagist',
							'url'   => 'https://packagist.org/packages/charcoal/',
						],
					],
					'icon' => '🔥',
				],
				[
					'name' => [
						'@en' => 'The Mistreatment Helpline',
						'@fr' => 'Ligne Aide Maltraitance Adultes et Aînés',
					],
					'description' => 'A provincial telephone line for listening, reference, and support specializing in the mistreatment of older adults in vulnerable situations.',
					'periods' => [
						'2023-08/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'Charcoal',
					],
					'client' => [
						'@en' => 'The Mistreatment Helpline',
						'@fr' => 'Ligne Aide Maltraitance Adultes et Aînés',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Government Site',
						],
						'subjects' => [
							'Counselling',
							'Mistreatment',
						],
					],
					'links' => [
						[
							'label' => 'lignemaltraitance.ca',
							'url'   => [
								'@en' => 'https://lignemaltraitance.ca/en',
								'@fr' => 'https://lignemaltraitance.ca/fr',
							],
						],
					],
					'icon' => '🧓',
				],
				[
					'name' => 'Canadian Internet Registration Authority',
					'description' => 'The organization that manages the <code>.ca</code> country code top-level domain for Canada.',
					'periods' => [
						'2022-08/2023-08',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => 'Canadian Internet Registration Authority',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
						],
						'subjects' => [
							'Registrar',
							'Technology',
						],
					],
					'links' => [
						[
							'label' => 'cira.ca',
							'url'   => [
								'@en' => 'https://cira.ca/en',
								'@fr' => 'https://cira.ca/fr',
							],
						],
					],
					'icon' => '🇨🇦',
				],
				[
					'name' => 'ITI Inc.',
					'description' => 'A professional information technology firm, foremerly known as ProContact.',
					'periods' => [
						'2020-05/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => 'ITI Inc.',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
							'Consultancy',
						],
						'subjects' => [
							'Security',
							'Technology',
						],
					],
					'links' => [
						[
							'label' => 'iti.ca',
							'url'   => [
								'@en' => 'https://iti.ca/en',
								'@fr' => 'https://iti.ca/fr',
							],
						],
					],
					'icon' => '👨‍💻',
				],
				[
					'name' => [
						'@en' => 'Maple from Quebec',
						'@fr' => 'Érable du Québec',
					],
					'description' => 'A marketing campaign to promote maple products.',
					'periods' => [
						'2018/..',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@en' => 'Quebec Maple Syrup Producers',
						'@fr' => 'Producteurs et productrices acéricoles du Québec',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Promotional',
							'Recipes',
						],
						'subjects' => [
							'Food & Drink',
						],
					],
					'links' => [
						[
							'label' => [
								'@en' => 'maplefromquebec.ca',
								'@fr' => 'erableduquebec.ca',
							],
							'url' => [
								'@en' => 'https://maplefromquebec.ca/',
								'@fr' => 'https://erableduquebec.ca/',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://locomotive.ca/en/projects/maple-from-quebec',
						],
						*/
					],
					'icon' => '🍁',
				],
				[
					'name' => 'Orenda Security',
					'description' => 'An international cyber security firm founded by a skilled group of professionals.',
					'periods' => [
						'2017/2018',
					],
					'status' => 'REPLACED',
					'stack' => [
						'Charcoal',
					],
					'client' => 'Orenda Security',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
							'Consultancy',
						],
						'subjects' => [
							'Security',
							'Technology',
						],
					],
					'links' => [
						[
							'label' => 'orendasecurity.com',
							'url'   => [
								'@en' => 'https://orendasecurity.com/',
							],
						],
						[
							'label' => 'Snapshot',
							'url'   => 'https://web.archive.org/web/20180825102620/https://orendasecurity.com/',
						],
					],
					'icon' => '👮‍♂️',
				],
				[
					'name' => 'Infini Inc.',
					'description' => 'A family business specializing in premium quality stone.',
					'periods' => [
						'2018-01/2018-09',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => 'Divyashakti Granites Ltd.',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Product Catalogue',
						],
						'subjects' => [
							'Building & Construction',
							'Interior Design',
						],
					],
					'links' => [
						[
							'label' => 'infiniinc.com',
							'url'   => [
								'@en' => 'https://infiniinc.com/',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://locomotive.ca/en/projects/infini',
						],
						*/
					],
					'icon' => '🏠',
				],
				[
					'name' => 'Monolith Productions',
					'description' => 'An American video game developer based in Kirkland, Washington.',
					'periods' => [
						'2016-11/2017-09',
					],
					'status' => 'REPLACED',
					'stack' => [
						'Charcoal',
					],
					'client' => 'Monolith Productions',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Video Game Developer',
						],
						'subjects' => [
							'Games',
						],
					],
					'links' => [
						[
							'label' => 'lith.com',
							'url'   => [
								'@en' => 'https://www.lith.com/',
							],
						],
						[
							'label' => 'Snapshot',
							'url'   => 'https://web.archive.org/web/20171013225022/https://www.lith.com/',
						],
					],
					'icon' => '🎮',
				],
				[
					'name' => [
						'@fr' => 'Collège Mont-Saint-Louis',
					],
					'description' => 'A private secondary school based in Montréal, Québec.',
					'periods' => [
						'2017-07',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'Charcoal',
					],
					'client' => [
						'@fr' => 'Collège Mont-Saint-Louis',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Educational Institution',
						],
						'subjects' => [
							'Education',
						],
					],
					'links' => [
						[
							'label' => 'msl.qc.ca',
							'url'   => [
								'@fr' => 'https://www.msl.qc.ca/',
							],
						],
					],
					'icon' => '🎓',
				],
				[
					'name' => 'Kvell',
					'description' => 'A Canadian brand of Scandinavian-inspired furniture.',
					'periods' => [
						'2017-03',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'Charcoal',
					],
					'client' => 'The FHE Group Inc.',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Product Catalogue',
							'Shop',
						],
						'subjects' => [
							'Furniture',
						],
					],
					'links' => [
						[
							'label' => 'kvellhome.com',
							'url'   => [
								'@en' => 'https://kvellhome.com/',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://locomotive.ca/en/projects/kvell',
						],
						*/
					],
					'icon' => '🛋',
				],
				[
					'name' => 'U Sports Canada',
					'description' => 'The national governing body for university sports.',
					'periods' => [
						'2016/2019',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'Charcoal',
					],
					'client' => 'U Sports Canada',
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Community',
							'Events',
						],
						'subjects' => [
							'Sports',
							'News',
						],
					],
					'links' => [
						[
							'label' => 'usports.ca',
							'url'   => [
								'@en' => 'https://usports.ca/en',
								'@fr' => 'https://usports.ca/fr',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://locomotive.ca/en/projects/u-sports-canada',
						],
						*/
					],
					'icon' => '🤾',
				],
				[
					'name' => [
						'@fr' => 'Plaisirs Gastronomiques',
					],
					'description' => 'A family-owned food processing company based in Boisbriand, Québec.',
					'periods' => [
						'2015',
						'2019',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'Charcoal Legacy (2019)',
						'Charcoal (2015)',
					],
					'client' => [
						'@fr' => 'Plaisirs Gastronomiques Inc.',
					],
					'roles' => [
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
						],
						'subjects' => [
							'Food & Drink',
						],
					],
					'links' => [
						[
							'label' => 'plaisirsgastronomiques.com',
							'url'   => [
								'@en' => 'https://plaisirsgastronomiques.com/en',
								'@fr' => 'https://plaisirsgastronomiques.com/fr',
							],
						],
					],
					'icon' => '🥘',
				],
				[
					'name' => [
						'@en' => 'Swimming Canada',
						'@fr' => 'Natation Canada',
					],
					'description' => 'The national governing body for competitive swimming.',
					'periods' => [
						'2015/2019',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@en' => 'Swimming Canada',
						'@fr' => 'Natation Canada',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Community',
							'Events',
						],
						'subjects' => [
							'Sports',
							'News',
						],
					],
					'links' => [
						[
							'label' => [
								'@en' => 'swimming.ca',
								'@fr' => 'natation.ca',
							],
							'url' => [
								'@en' => 'https://swimming.ca/',
								'@fr' => 'https://natation.ca/',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://locomotive.ca/en/projects/swimming-canada',
						],
						*/
					],
					'icon' => '🏊',
				],
				[
					'name' => [
						'@fr' => 'Union des Producteurs Agricoles',
					],
					'description' => 'The agricultural trade union representing producers in the province Québec.',
					'periods' => [
						'2014/2015',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@fr' => 'Union des Producteurs Agricoles',
					],
					'roles' => [
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Trade Union',
						],
						'subjects' => [
							'Agriculture',
						],
					],
					'links' => [
						[
							'label' => 'upa.qc.ca',
							'url'   => [
								'@en' => 'https://www.upa.qc.ca/en/',
								'@fr' => 'https://www.upa.qc.ca/fr/',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://locomotive.ca/en/projects/upa',
						],
						*/
					],
					'icon' => '🌾',
				],
				[
					'name' => [
						'@en' => 'Harwell Packaging Inc.',
						'@fr' => 'Emballage Harwell Inc.',
					],
					'description' => 'A family-owned custom packaging company based in Dollard-des-Ormeaux, Québec.',
					'periods' => [
						'2014',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'Charcoal Legacy',
					],
					'client' => [
						'@en' => 'Harwell Packaging Inc.',
						'@fr' => 'Emballage Harwell Inc.',
					],
					'roles' => [
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
							'Product Catalogue',
						],
						'subjects' => [
							'Industry',
							'Product Design',
						],
					],
					'links' => [
						[
							'label' => 'harwell.ca',
							'url'   => [
								'@en' => 'https://harwell.ca/en/1/Home',
								'@fr' => 'https://harwell.ca/fr/1/Accueil',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => 'https://web.archive.org/web/20170730160542/https://locomotive.ca/en/projects/harwell',
						],
						*/
					],
					'icon' => '📦',
				],
			],
		],
		[
			'name' => 'Motion in Design',
			'periods' => [
				'2012-05/2013-11',
			],
			'type' => MC_WORK_TYPE_OCCUPATION,
			'roles' => [
				'Frontend Developer',
				'Backend Developer',
				'Project Manager',
			],
			'url' => [
				'@fr' => 'http://motionindesign.com/',
			],
			'projects' => [
				[
					'name' => 'Lou-Tec',
					'description' => 'A heavy machinery and equipment rental company based in Québec.',
					'periods' => [
						'2013',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@fr' => 'Groupe Lou-Tec',
					],
					'roles' => [
						'Supervisor',
						'Quality Assurance',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
							'Product Catalogue',
						],
						'subjects' => [
							'Building & Construction',
							'Equipment & Machinery',
						],
					],
					'links' => [
						[
							'label' => 'loutec.com',
							'url'   => [
								'@en' => 'https://www.loutec.com/en',
								'@fr' => 'https://www.loutec.com/fr',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => [
								'@fr' => 'http://motionindesign.com/project/lou-tec/',
							],
						],
						*/
					],
					'icon' => '👷‍♂️',
				],
				[
					'name' => [
						'@en' => 'McAuslan Brewing',
						'@fr' => 'Brasserie McAuslan',
					],
					'description' => 'A brewing company in Montréal, Québec.',
					'periods' => [
						'2013',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@en' => 'McAuslan Brewing',
						'@fr' => 'Brasserie McAuslan',
					],
					'roles' => [
						'Supervisor',
						'Quality Assurance',
						'Support',
					],
					'categories' => [
						'types' => [
							'Product Catalogue',
							'Promotional',
						],
						'subjects' => [
							'Food & Drink',
						],
					],
					'links' => [
						[
							'label' => 'mcauslan.com',
							'url'   => [
								'@en' => 'https://mcauslan.com/en',
								'@fr' => 'https://mcauslan.com/fr',
							],
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => [
								'@fr' => 'http://motionindesign.com/project/mcauslan/',
							],
						],
						*/
					],
					'icon' => '🍺',
				],
				[
					'name' => 'Remstar Films',
					'description' => 'A film and television production and distribution comapny based in Montréal, Québec.',
					'periods' => [
						'2013',
					],
					'status' => 'REPLACED',
					'stack' => [
						'WordPress',
					],
					'client' => 'Remcorp',
					'roles' => [
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Corporate Site',
						],
						'subjects' => [
							'Movies',
							'Television',
						],
					],
					'links' => [
						[
							'label' => 'remstarfilms.com',
							'url'   => [
								'@en' => 'https://remstarfilms.com/en',
								'@fr' => 'https://remstarfilms.com/fr',
							],
						],
						[
							'label' => 'Snapshot',
							'url'   => 'https://web.archive.org/web/20131126215350/http://remstarfilms.com/en/',
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => [
								'@fr' => 'http://www.motionindesign.com/project/remstar-films/',
							],
						],
						*/
					],
					'icon' => '🎬',
				],
				[
					'name' => [
						'@en' => 'Thomas Marine Group',
						'@fr' => 'Groupe Thomas Marine',
					],
					'description' => 'A family-owned dealership specializing in boats based in Varennes, Québec.',
					'periods' => [
						'2012/2013',
					],
					'status' => 'REPLACED',
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@en' => 'Thomas Marine Group',
						'@fr' => 'Groupe Thomas Marine',
					],
					'roles' => [
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Product Catalogue',
						],
						'subjects' => [
							'Consumer',
							'Boating',
						],
					],
					'links' => [
						[
							'label' => 'groupethomasmarine.com',
							'url'   => [
								'@en' => 'https://www.groupethomasmarine.com/en',
								'@fr' => 'https://www.groupethomasmarine.com/fr',
							],
						],
						[
							'label' => 'Snapshot',
							'url'   => 'https://web.archive.org/web/20130307010130/http://groupethomasmarine.com/',
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => [
								'@fr' => 'http://www.motionindesign.com/project/le-groupe-thomas-marine/',
							],
						],
						*/
					],
					'icon' => '🚤',
				],
				[
					'name' => 'Marie-Mai',
					'description' => 'The official website of Marie-Mai, a Canadian singer from Québec.',
					'periods' => [
						'2012',
					],
					'status' => 'REPLACED',
					'stack' => [
						'WordPress',
					],
					'client' => [
						'@fr' => 'Productions J',
					],
					'roles' => [
						'Quality Assurance',
						'Support',
					],
					'categories' => [
						'types' => [
							'Music Artist',
							'Promotional',
						],
						'subjects' => [
							'Music',
						],
					],
					'links' => [
						[
							'label' => 'mariemai.com',
							'url'   => [
								'@fr' => 'http://www.mariemai.com/',
							],
						],
						[
							'label' => 'Snapshot',
							'url'   => 'https://web.archive.org/web/20121002044634/http://www.mariemai.com/',
						],
						/*
						[
							'label' => 'Case Study',
							'url'   => [
								'@fr' => 'http://motionindesign.com/project/mariemai-pour-productionj/',
							],
						],
						*/
					],
					'icon' => '👩‍🎤',
				],
				[
					'name' => 'SYNERGX Technologies',
					'description' => 'A global supplier of automated optical inspection technologies based in Laval, Québec.',
					'periods' => [
						'2012/2013',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'WordPress',
					],
					'client' => 'SYNERGX Technologies Inc.',
					'roles' => [
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Product Catalogue',
						],
						'subjects' => [
							'Industry',
							'Technology',
						],
					],
					'links' => [
						[
							'label' => 'synergx.ca',
							'url'   => 'http://www.synergx.ca/',
						],
					],
					'icon' => '⚙️',
				],
			],
		],
		[
			'name' => 'Freelance',
			'periods' => [
				'2008-01/2012-04',
			],
			'type' => MC_WORK_TYPE_OCCUPATION,
			'roles' => [
				'Backend Developer',
				'Frontend Developer',
				'Designer',
			],
			'url' => NULL,
			'projects' => [
			],
		],
		[
			'name' => 'Patrick Loranger',
			'periods' => [
				'2005/..',
			],
			'type' => MC_WORK_TYPE_AVOCATION,
			'roles' => [
				'Backend Developer',
				'Frontend Developer',
				'Designer',
			],
			'url' => NULL,
			'projects' => [
				[
					'name' => [
						'@fr' => 'L\'Ordre des Ornyx',
					],
					'description' => 'The official website for the series of fantasy novels.',
					'periods' => [
						'2010',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'HTML',
					],
					'client' => 'Patrick Loranger',
					'roles' => [
						'Designer',
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Promotional',
							'Project',
						],
						'subjects' => [
							'Books & Literature',
						],
					],
					'links' => [
						[
							'label' => 'ornyx.ca',
							'url'   => [
								'@fr' => 'http://ornyx.ca',
							],
						],
					],
					'icon' => '🎇',
				],
				[
					'name' => 'Technotron',
					'description' => 'The official website for the series of science-fiction novels and tabletop role-playing game.',
					'periods' => [
						'2006',
					],
					'status' => MC_PROJECT_STATUS_ACTIVE,
					'stack' => [
						'HTML',
					],
					'client' => 'Patrick Loranger',
					'roles' => [
						'Frontend Developer',
						'Backend Developer',
					],
					'categories' => [
						'types' => [
							'Promotional',
							'Project',
						],
						'subjects' => [
							'Books & Literature',
							'Games',
						],
					],
					'links' => [
						[
							'label' => 'rpgtechnotron.ca',
							'url'   => [
								'@fr' => 'http://rpgtechnotron.ca',
							],
						],
					],
					'icon' => '🌌',
				],
			],
		],
	],
];
