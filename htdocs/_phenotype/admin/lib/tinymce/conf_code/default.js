/*
 * Phenotype RTFEditor config file for TinyMCE
 *
 * ATTENTION! for customizations please read the infos in the next lines
 *
 * if you like to have your own configs, it's recommended to copy the existing files to a subfolder of your htdocs
 * and create your own config area there to separate your changes from the system and to ease future system upgrades.
 *
 * ensure the filename and the array key in the first line (in this case 'default') fit together
 * and check to use the correct array name, pt_rtf_opts for RichTextAreas, pt_code_opts for CodeAreas
 */
pt_code_opts['default'] = {
	theme_advanced_buttons1 : "undo,redo,code,|,search,replace,|,help",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_path : false,
	plugins : "searchreplace",
	paste_convert_middot_lists : true
};