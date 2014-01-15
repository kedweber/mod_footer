<?php

class JFormFieldCopyrightmenu extends JFormField {
	protected $type = 'Copyrightmenu';

	public function getInput() {
		$data = new stdClass();
		$data->value = '';
		$data->text = 'No Table';

		$array = JHtml::_('menu.menus');
		array_unshift($array, $data);

		return JHtml::_('select.genericlist', $array, $this->name, null, 'value', 'text', $this->value);
	}
}