<!DOCTYPE html>
<html>
<head>
<title>Classic theme development file</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<script src="tinymce/js/tinymce/tinymce.dev.js"></script>
<!-- <script src="../../js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="../../js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="../../js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script src="../../js/tinymce/plugins/codesample/plugin.dev.js"></script> -->
<script>
	tinymce.init({
		selector: "textarea#elm1",
		theme: "modern",
		plugins: [
			"advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker codesample"
		],
		external_plugins: {
			//"moxiemanager": "/moxiemanager-php/plugin.js"
		},
		content_css: "css/development.css",
		add_unload_trigger: false,
		autosave_ask_before_unload: false,

		toolbar1: "save newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
		toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
		toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample",
		menubar: false,
		toolbar_items_size: 'small',

		style_formats: [
			{title: 'Bold text', inline: 'b'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		templates: [
			{title: 'My template 1', description: 'Some fancy template 1', content: 'My html'},
			{title: 'My template 2', description: 'Some fancy template 2', url: 'development.html'}
		],

        spellchecker_callback: function(method, data, success) {
			if (method == "spellcheck") {
				var words = data.match(this.getWordCharPattern());
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				success({words: suggestions, dictionary: true});
			}

			if (method == "addToDictionary") {
				success();
			}
		}
	});
</script>
</head>
<body>
<form method="post" action="http://www.tinymce.com/dump.php?example=true">
	<div>
		<div>
			<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 50%">
			amet, pulvinar laoreet leo. Nam sed lectus quam, ut sagittis tellus. Quisque dignissim mauris a augue rutrum tempor. Donec vitae purus nec massa vestibulum ornare sit amet id tellus. Nunc quam mauris, fermentum nec lacinia eget, sollicitudin nec ante. Aliquam molestie volutpat dapibus. Nunc interdum viverra sodales. Morbi laoreet pulvinar gravida. Quisque ut turpis sagittis nunc accumsan vehicula. Duis elementum congue ultrices. Cras faucibus feugiat arcu quis lacinia. In hac habitasse platea dictumst. Pellentesque fermentum magna sit amet tellus varius ullamcorper. Vestibulum 
<!-- 				&lt;p&gt;
					Nam nisi elit, &lt;a href="http://www.tinymce.com"&gt;cursus&lt;/a&gt; in rhoncus sit amet, pulvinar laoreet leo. Nam sed lectus quam, ut sagittis tellus. Quisque dignissim mauris a augue rutrum tempor. Donec vitae purus nec massa vestibulum ornare sit amet id tellus. Nunc quam mauris, fermentum nec lacinia eget, sollicitudin nec ante. Aliquam molestie volutpat dapibus. Nunc interdum viverra sodales. Morbi laoreet pulvinar gravida. Quisque ut turpis sagittis nunc accumsan vehicula. Duis elementum congue ultrices. Cras faucibus feugiat arcu quis lacinia. In hac habitasse platea dictumst. Pellentesque fermentum magna sit amet tellus varius ullamcorper. Vestibulum at urna augue, eget varius neque. Fusce facilisis venenatis dapibus. Integer non sem at arcu euismod tempor nec sed nisl. Morbi ultricies, mauris ut ultricies adipiscing, felis odio condimentum massa, et luctus est nunc nec eros. &lt;img src="http://moxiecode.cachefly.net/tinymce/v6/images/logo.png" style="float: right "/&gt;
				&lt;/p&gt;
				&lt;p&gt;
				&lt;img src="http://moxiecode.cachefly.net/tinymce/v6/images/logo.png" /&gt; Nam nisi elit, &lt;a href="http://www.tinymce.com"&gt;cursus&lt;/a&gt; in rhoncus sit amet, pulvinar laoreet leo. Nam sed lectus quam, ut sagittis tellus. Quisque dignissim mauris a augue rutrum tempor. Donec vitae purus nec massa vestibulum ornare sit amet id tellus. Nunc quam mauris, fermentum nec lacinia eget, sollicitudin nec ante. Aliquam molestie volutpat dapibus. Nunc interdum viverra sodales. Morbi laoreet pulvinar gravida. Quisque ut turpis sagittis nunc accumsan vehicula. Duis elementum congue ultrices. Cras faucibus feugiat arcu quis lacinia. In hac habitasse platea dictumst. Pellentesque fermentum magna sit amet tellus varius ullamcorper. Vestibulum at urna augue, eget varius neque. Fusce facilisis venenatis dapibus. Integer non sem at arcu euismod tempor nec sed nisl. Morbi ultricies, mauris ut ultricies adipiscing, felis odio condimentum massa, et luctus est nunc nec eros.
				&lt;/p&gt; -->
			</textarea>
			<!-- <div>
				<a href="javascript:;" onclick="tinymce.get('elm1').show();return false;">[Show]</a>
				<a href="javascript:;" onclick="tinymce.get('elm1').hide();return false;">[Hide]</a>
				<a href="javascript:;" onclick="tinymce.execCommand('mceAddEditor', false, 'elm1');return false;">[Add]</a>
				<a href="javascript:;" onclick="tinymce.get('elm1').remove();return false;">[Remove]</a>
				<a href="javascript:;" onclick="tinymce.get('elm1').execCommand('Bold');return false;">[Bold]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm1').getContent());return false;">[Get contents]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm1').getContent({format: 'raw'}));return false;">[Get raw]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm1').selection.getContent());return false;">[Get selected HTML]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm1').selection.getContent({format : 'text'}));return false;">[Get selected text]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm1').selection.getNode().nodeName);return false;">[Get selected element]</a>
				<a href="javascript:;" onclick="tinymce.execCommand('mceInsertContent',false,'<b>Hello world!!</b>');return false;">[Insert HTML]</a>
				<a href="javascript:;" onclick="tinymce.execCommand('mceReplaceContent',false,'<b>{$selection}</b>');return false;">[Replace selection]</a>
			</div>
 --><!-- 
			<br />
			<textarea id="elm2" name="elm2" rows="15" cols="80" style="width: 80%">
				&lt;p&gt;
					This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.
				&lt;/p&gt;
				&lt;p&gt;
				Nam nisi elit, cursus in rhoncus sit amet, pulvinar laoreet leo. Nam sed lectus quam, ut sagittis tellus. Quisque dignissim mauris a augue rutrum tempor. Donec vitae purus nec massa vestibulum ornare sit amet id tellus. Nunc quam mauris, fermentum nec lacinia eget, sollicitudin nec ante. Aliquam molestie volutpat dapibus. Nunc interdum viverra sodales. Morbi laoreet pulvinar gravida. Quisque ut turpis sagittis nunc accumsan vehicula. Duis elementum congue ultrices. Cras faucibus feugiat arcu quis lacinia. In hac habitasse platea dictumst. Pellentesque fermentum magna sit amet tellus varius ullamcorper. Vestibulum at urna augue, eget varius neque. Fusce facilisis venenatis dapibus. Integer non sem at arcu euismod tempor nec sed nisl. Morbi ultricies, mauris ut ultricies adipiscing, felis odio condimentum massa, et luctus est nunc nec eros.
				&lt;/p&gt;
			</textarea>
			<div>
				<a href="javascript:;" onclick="tinymce.get('elm2').show();return false;">[Show]</a>
				<a href="javascript:;" onclick="tinymce.get('elm2').hide();return false;">[Hide]</a>
				<a href="javascript:;" onclick="tinymce.execCommand('mceAddEditor', false, 'elm2');return false;">[Add]</a>
				<a href="javascript:;" onclick="tinymce.get('elm2').remove();return false;">[Remove]</a>
				<a href="javascript:;" onclick="tinymce.get('elm2').execCommand('Bold');return false;">[Bold]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm2').getContent());return false;">[Get contents]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm2').getContent({format: 'raw'}));return false;">[Get raw]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm2').selection.getContent());return false;">[Get selected HTML]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm2').selection.getContent({format : 'text'}));return false;">[Get selected text]</a>
				<a href="javascript:;" onclick="alert(tinymce.get('elm2').selection.getNode().nodeName);return false;">[Get selected element]</a>
				<a href="javascript:;" onclick="tinymce.execCommand('mceInsertContent',false,'<b>Hello world!!</b>');return false;">[Insert HTML]</a>
				<a href="javascript:;" onclick="tinymce.execCommand('mceReplaceContent',false,'<b>{$selection}</b>');return false;">[Replace selection]</a>
			</div>
		</div>

		<br />
		<input type="submit" name="save" value="Submit" />
		<input type="reset" name="reset" value="Reset" /> -->
	</div>
</form>

</body>
</html>
