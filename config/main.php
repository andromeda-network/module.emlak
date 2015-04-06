<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config['module_name'] 			= 'Emlak';
$config['module_description'] 	= 'Emlak Modulu emlak ofisi ve emlak yonetimini saglar';
$config['version'] 				= '1.0';
$config['can_disable'] 			= true;
$config['path'] 				= 'emlak';
$config['icon'] 				= 'fa-building-o';
$config['admin_menu_hook']		= 'emlak/ofis/_hook_admin_menu';
$config['menu_type']			= 'hook';

$config['contollers']			= array(
									array(
										'controllerName'  => 'ofis',
										'controllerAlias' => 'Emlak Ofisi Yonetimi',
										'controllerPath'  => 'ofis.php',
										'controllerPerms' => array(
											array(
												"key" => "/emlak/ofis/manage",
												"description" => "Tüm emlak ofislerini yönetebilir",
												"subPerms" => array(
													array(
														"key" => "/emlak/ofis/index",
														"description" => "Tüm Emlak Ofislerini Listeleyebilir",
														"subPerms" => array(
															array(
																"key" => "/emlak/ofis/show",
																"description" => "Emlak Ofislerini Gorebilir",
															),
															array(
																"key" => "/emlak/ofis/create",
																"description" => "Yeni Bir Emlak Ofisi Olusturabilir",
															),
															array(
																"key" => "/emlak/ofis/edit",
																"description" => "Mevcut Bir Emlak Ofisini Duzenleyebilir",
															),
															array(
																"key" => "/emlak/ofis/destroy",
																"description" => "Bir Emlak Ofisini Silebilir"
															)
														)
													)

												)
											),
											array(
												"key" => "/emlak/ofis/manage_self_office",
												"description" => "Kendi ofis bilgilerini ve görevlileri yönetebilir"
											)
										),
									),


									array(
										'controllerName'  => 'ilan',
										'controllerAlias' => 'Emlak İlanları Yonetimi',
										'controllerPath'  => 'ilan.php',
										'controllerPerms' => array(
											array(
												"key" => "/emlak/ilan/manage",
												"description" => "Tüm Emlak İlanlarını Yonetebilir",
												"subPerms" => array(
													array(
														"key" => "/emlak/ilan/index",
														"description" => "Tüm Emlak İlanlarını Listeleyebilir",
														"subPerms" => array(
															array(
																"key" => "/emlak/ilan/show",
																"description" => "Tüm Emlak İlanlarını Gorebilir",
															),
															array(
																"key" => "/emlak/ilan/create",
																"description" => "Herhangi Bir Emlak Ofisi Adına Yeni Bir Emlak İlanı olusturabilir",
															),
															array(
																"key" => "/emlak/ilan/edit",
																"description" => "Tüm Ofislerin Hernagi Bir Emlak İlanını Düzenleyebilir",
															),
															array(
																"key" => "/emlak/ilan/destroy",
																"description" => "Herhangi Bir Emlak İlanını Silebilir"
															)
														)
													)

												)
											),
											array(
												"key" => "/emlak/ilan/manage_ofis_ilan",
												"description" => "Kendi ofisine bağlı tüm ilanları yönetebilir",
												"subPerms" => array(
													array(
														"key" => "/emlak/ilan/ofis_index",
														"description" => "Kendi ofisine bağlı tüm ilanları listeleyebilir",
														"subPerms" => array(
															array(
																"key" => "/emlak/ilan/ofis_show",
																"description" => "Kendi ofisine bağlı tüm emlak ilanlarını görebilir",
															),
															array(
																"key" => "/emlak/ilan/ofis_create",
																"description" => "Kendi ofisine bağlı bir emlak ilanı oluşturabilir",
															),
															array(
																"key" => "/emlak/ilan/ofis_edit",
																"description" => "Kendi ofisine bağlı herhangi bir ilanı düzenleyebilir",
															),
															array(
																"key" => "/emlak/ilan/ofis_destroy",
																"description" => "Kendi ofisine bağlı herhangi bir ilanı silebilir"
															)
														)
													)
												)
											),
											array(
												"key" => "/emlak/ilan/manage_self_ilan",
												"description" => "Kendi Oluşturduğu tüm ilanları yönetebilir",
												"subPerms" => array(
													array(
														"key" => "/emlak/ilan/self_index",
														"description" => "Kendi Oluşturduğu tüm ilanları listeleyebilir",
														"subPerms" => array(
															array(
																"key" => "/emlak/ilan/self_show",
																"description" => "Kendi Oluşturduğu tüm emlak ilanlarını görebilir",
															),
															array(
																"key" => "/emlak/ilan/self_create",
																"description" => "Kendi Oluşturduğu bir emlak ilanı oluşturabilir",
															),
															array(
																"key" => "/emlak/ilan/self_edit",
																"description" => "Kendi Oluşturduğu herhangi bir ilanı düzenleyebilir",
															),
															array(
																"key" => "/emlak/ilan/self_destroy",
																"description" => "Kendi Oluşturduğu herhangi bir ilanı silebilir"
															)
														)
													)
												)
											),
											array(
												"key" => "/emlak/ofis/favori",
												"description" => "Favori emlak ofisleri özelliğini kullanabilir"
											),
											array(
												"key" => "/emlak/ilan/favori",
												"description" => "Favori emlak ilanları özelliğini kullanabilir"
											)
										)
									)
								);


$config['author_name'] 			= 'Asil Balaban';
$config['author_url'] 			= 'http://www.github.com/asilbalaban';
