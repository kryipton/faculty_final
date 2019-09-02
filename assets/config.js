/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

var base_url = window.location.origin;

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';


    // ...
    config.filebrowserBrowseUrl =  base_url + '/assets/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = base_url +  '/assets/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = base_url +  '/assets/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = base_url +  '/assets/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = base_url +  '/assets/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = base_url +  '/assets/kcfinder/http://localhost/faculty/upload.php?opener=ckeditor&type=flash';
// ...
};
