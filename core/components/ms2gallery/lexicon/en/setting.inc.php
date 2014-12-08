<?php
/**
 * Settings English Lexicon Entries for ms2Gallery
 *
 * @package ms2gallery
 * @subpackage lexicon
 */
$_lang['area_ms2gallery_resource'] = 'Resource';
$_lang['area_ms2gallery_frontend'] = 'Frontend';

$_lang['setting_ms2gallery_source_default'] = 'Default media source';
$_lang['setting_ms2gallery_source_default_desc'] = 'Default media source for the resource gallery.';
$_lang['setting_ms2gallery_thumbnail_size'] = 'Default thumbnail size';
$_lang['setting_ms2gallery_thumbnail_size_desc'] = 'Size of default pre-generated thumbnail for field "thumb" in msProduct table. Of course, this size should exist in the settings of your media source that generates the previews. Otherwise you will receive  miniShop2 logo instead of resource image in manager.';
$_lang['setting_ms2gallery_date_format'] = 'Format of dates';
$_lang['setting_ms2gallery_date_format_desc'] = 'You can specify how to format dates using php strftime() syntax. By default format is "%d.%m.%y %H:%M".';
$_lang['setting_ms2gallery_disable_for_templates'] = 'Disable for templates';
$_lang['setting_ms2gallery_disable_for_templates_desc'] = 'Specify comma-separated list of ids of a templates, for which you do not want to display the tab with gallery.';

$_lang['setting_ms2gallery_set_placeholders'] = 'Enable auto-placeholders?';
$_lang['setting_ms2gallery_set_placeholders_desc'] = 'You can enable auto set of placeholders with images of gallery on page.';
$_lang['setting_ms2gallery_placeholders_prefix'] = 'Prefix of placeholders';
$_lang['setting_ms2gallery_placeholders_prefix_desc'] = 'You can specify placeholders prefix for images. Than you will can use it as [[+prefix.rank.field]]. For example: [[+ms2g.0.url]] or [[+ms2g.1.120x90]]. Placeholder [[+prefix.rank]] will print array with the whole available file properties or templated image if parameter "placeholders_tpl" is specified. For example "[[+ms2g.1]]".';
$_lang['setting_ms2gallery_placeholders_tpl'] = 'Template for placeholders';
$_lang['setting_ms2gallery_placeholders_tpl_desc'] = 'Specify the name of the TV or chunk, for template the output of placeholders of type [[+ms2g.0]], [[+ms2g.1]] on the page. The TV must be assigned to a resource, otherwise would be used chunk with the same name. If both the TV and the chunk does not exist or is empty, then you will receive a printed array with image data in this placeholder.';
$_lang['setting_ms2gallery_placeholders_thumbs'] = 'Thumbs for placeholders';
$_lang['setting_ms2gallery_placeholders_thumbs_desc'] = 'Specify a comma-separated list of sizes of thumbs, that you want to choose for placing in placeholders. For example "120х90,360x270".';

$_lang['setting_ms2gallery_page_size'] = 'Number of files on page';
$_lang['setting_ms2gallery_page_size_desc'] = 'You can set the number of files displayed on the page, default is 20. 0 - display all files.';

$_lang['ms2gallery_source_thumbnails_desc'] = 'JSON encoded array of options for generating thumbnails.';
$_lang['ms2gallery_source_maxUploadWidth_desc'] = 'Maximum width of image for upload. All images, that exceeds this parameter, will be resized to fit.';
$_lang['ms2gallery_source_maxUploadHeight_desc'] = 'Maximum height of image for upload. All images, that exceeds this parameter, will be resized to fit.';
$_lang['ms2gallery_source_maxUploadSize_desc'] = 'Maximum size of file for upload (in bytes).';
$_lang['ms2gallery_source_imageNameType_desc'] = 'This setting specifies how to rename a file after upload. Hash is the generation of a unique name depending on the contents of the file. Friendly - generation behalf of the algorithm friendly URLs of pages of the site (they are managed by system settings).';
$_lang['ms2gallery_source_imageUploadDir_desc'] = 'Direction of loading files. 1 (default) - upload files in the end list. 0 - upload files to start list';