<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config['module_name'] 			= 'Emlak';
$config['module_description'] 	= 'Emlak Modulu emlak ofisi ve emlak yonetimini saglar';
$config['version'] 				= '1.0';
$config['can_disable'] 			= true;
$config['path'] 				= 'emlak';
$config['icon'] 				= 'fa-building-o';


$config['contollers']			= array(
									array(
										'controllerName'  => 'ofis',
										'controllerAlias' => 'Emlak Yonetimi',
										'controllerPath'  => 'ofis.php',
										'controllerPerms' => array(
											array(
												"key" => "/emlak/ofis/manage",
												"description" => "Emlak Ofislerini Yonetebilir",
												"subPerms" => array(
													array(
														"key" => "/emlak/ofis/index",
														"description" => "Emlak Ofislerini Listeleyebilir",
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

											
											

										)
									)
								);


$config['author_name'] 			= 'Asil Balaban';
$config['author_url'] 			= 'http://www.github.com/asilbalaban';
