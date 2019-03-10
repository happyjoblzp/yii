<?php

return [
	'title' => '商品管理演示系统(@HM)',
	'domain' => [
		'www' => 'http://sz.come51buy.com',
		'm' => 'http://sz.come51buy.com/m',
		'web' => 'http://sz.come51buy.com/web'
	],
	'upload' => [
		'avatar' => '/uploads/avatar',
		'brand' => '/uploads/brand',
		'book' => '/uploads/book',
	],
	'weixin' => [
		'appid' => '根据实际情况填写',
		'sk' => '根据实际情况填写',
		'token' => '根据实际情况填写',
		'aeskey' => '根据实际情况填写',
		'pay' => [
			'key' => '根据实际情况填写',
			'mch_id' => '根据实际情况填写',
			'notify_url' => [
				'm' => '/pay/callback'
			]
		]
	]
];
