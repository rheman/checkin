<?php

use Pessek\PessekCheckin\Bootstrap;

return [
	'bootstrap' => \Pessek\PessekCheckin\Bootstrap::class,
	'entities' => [
		[
			'type' => 'object',
			'subtype' => 'checkin',
			'class' => ElggCheckinCover::class,
			'searchable' => true,
		],
	],
	'settings' => [
		'enable_groups' => 'yes',
	],
	'actions' => [
		'checkin/upload' => [],
		'checkin/del_img' => [],
		'checkin/change_cover' => [],
		'checkin/deleteattachment' => [],
		'checkin/deletecheckin' => [],
	],
	'routes' => [
		'default:object:checkin' => [
			'path' => '/checkin',
			'resource' => 'checkin/all',
		],
		'collection:object:checkin:all' => [
			'path' => '/checkin/all',
			'resource' => 'checkin/all',
		],
		'collection:object:checkin:owner' => [
			'path' => '/checkin/owner/{username}',
			'resource' => 'checkin/owner',
		],
		'collection:object:checkin:friends' => [
			'path' => '/checkin/friends/{username}',
			'resource' => 'checkin/friends',
		],
		'collection:object:checkin:map' => [
			'path' => '/checkin/map/',
			'resource' => 'checkin/map',
		],
		'collection:object:checkin:group' => [
			'path' => '/checkin/group/{guid}',
			'resource' => 'checkin/owner',
		],
		'add:object:checkin' => [
			'path' => '/checkin/add/{guid}',
			'resource' => 'checkin/upload',
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
		],
		'edit:object:checkin' => [
			'path' => '/checkin/edit/{guid}',
			'resource' => 'checkin/edit',
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
		],
		'view:object:checkin' => [
			'path' => '/checkin/view/{guid}/{title?}',
			'resource' => 'checkin/view',
		],
		'collection:object:checkin:filter' => [
			'path' => '/checkin/filter',
			'resource' => 'checkin/filter',
		],
	],
	'widgets' => [
		'checkin' => [
			'context' => ['profile', 'dashboard'],
		],
	],
];
