
resizereinit=true;

menu[1] = {
id:'menu1', //use unique quoted id (quoted) REQUIRED!!
fontsize:'100%', // express as percentage with the % sign
linkheight:22 ,  // linked horizontal cells height
hdingwidth:210 ,  // heading - non linked horizontal cells width
// Finished configuration. Use default values for all other settings for this particular menu (menu[1]) ///

menuItems:[ // REQUIRED!!
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["Menu"], //create header
["Trang chủ", "index.php", ""],
["Giới thiệu", "index.php?task=intro",""],
["Liên hệ", "index.php?task=contact",""],
["Đăng kí", "index.php?task=register",""],
["Đăng nhập", "index.php?task=login",""],

["Liên kết website", "", ""], //create header
["http://sinhvienit.net", "http://sinhvienit.net", "_new"],

]}; // REQUIRED!! do not edit or remove

make_menus();