<?
				function DIGUI_360($data_ar)
				{
					GLOBAL $post_url_listsharedir, $full_url, $id,$pa, $cookies;
					foreach($data_ar as $k => $v)
					{
						if ($v->fhash == '')// 如果fhash值为空，则为文件夹,进入
						{
							$data_list = psot_listsharedir($post_url_listsharedir, $full_url, $v->nid, $id, $cookies);
							$back_ .=  DIGUI_360($data_list);
						}
						else
						{
							$back_ .= '<br>'.WEBHOST . '/360/' . $id . '/' . $pa . '/' . $v->nid . '/' . $v->name;
						}
					}
					return $back_;
				}
$back_360[] = trim(DIGUI_360($list_data), '<br>');