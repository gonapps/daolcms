<?php
	/**
	 * @class  editorAPI
	 * @author NAVER (developers@xpressengine.com)
	 * @brief 
	 **/

	class editorAPI extends editor {
		function dispEditorSkinColorset(&$oModule) {
			$oModule->add('colorset', Context::get('colorset'));
		}
	}
