<?php
class PreviewerField extends BaseField {
	static public $fieldname = 'previewer';
	static public $assets = array(
		'js' => [
			'script.js',
		],
		'css' => [
			'style.css',
		],
	);

	public function element() {
		$url = u() . '/' . str_replace(
			['{{slug}}', '{{uri}}', '{{id}}'],
			[$this->page()->slug(), $this->page()->uri(), $this->page()->id()],
			$this->uri()
		);

		$element = parent::element();
		$element->data('field', self::$fieldname);
		$element->data('previewer-href', $url);
		return $element;
	}
}