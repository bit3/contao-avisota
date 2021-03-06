<?php

/**
 * Avisota newsletter and mailing system
 * Copyright © 2016 Sven Baumann
 *
 * PHP version 5
 *
 * @copyright  way.vision 2015
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-core
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Class AvisotaNewsletterTheme
 *
 * @copyright  way.vision 2015
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-core
 */
class AvisotaNewsletterTheme
{
	protected static function load($id)
	{
		$result = Database::getInstance()
			->prepare('SELECT * FROM orm_avisota_message_theme WHERE id=?')
			->execute($id);
		if ($result->next()) {
			$theme                    = new AvisotaNewsletterTheme();
			$theme->id                = $result->id;
			$theme->title             = $result->title;
			$theme->previewImage      = $result->preview;
			$theme->areas             = deserialize($result->areas, true);
			$theme->htmlTemplate      = $result->template_html;
			$theme->plainTemplate     = $result->template_plain;
			$theme->stylesheets       = deserialize($result->stylesheets, true);
			$theme->templateDirectory = $result->templateDirectory;
			return $theme;
		}
		return null;
	}

	/**
	 * @var int
	 */
	protected $id = 0;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $previewImage;

	/**
	 * @var array
	 */
	protected $areas;

	/**
	 * @var string
	 */
	protected $htmlTemplate;

	/**
	 * @var string
	 */
	protected $plainTemplate;

	/**
	 * @var array
	 */
	protected $stylesheets;

	/**
	 * @var string
	 */
	protected $templateDirectory;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param  $preview
	 */
	public function setPreviewImage($preview)
	{
		$this->previewImage = $preview;
	}

	/**
	 * @return
	 */
	public function getPreviewImage()
	{
		return $this->previewImage;
	}

	/**
	 * @param array $areas
	 */
	public function setAreas($areas)
	{
		$this->areas = $areas;
	}

	/**
	 * @return array
	 */
	public function getAreas()
	{
		return $this->areas;
	}

	/**
	 * @param string $htmlTemplate
	 */
	public function setHtmlTemplate($htmlTemplate)
	{
		$this->htmlTemplate = $htmlTemplate;
	}

	/**
	 * @return string
	 */
	public function getHtmlTemplate()
	{
		return $this->htmlTemplate;
	}

	/**
	 * @param string $plainTemplate
	 */
	public function setPlainTemplate($plainTemplate)
	{
		$this->plainTemplate = $plainTemplate;
	}

	/**
	 * @return string
	 */
	public function getPlainTemplate()
	{
		return $this->plainTemplate;
	}

	/**
	 * @param array $stylesheets
	 */
	public function setStylesheets($stylesheets)
	{
		$this->stylesheets = $stylesheets;
	}

	/**
	 * @return array
	 */
	public function getStylesheets()
	{
		return $this->stylesheets;
	}

	/**
	 * @param string $templateDirectory
	 */
	public function setTemplateDirectory($templateDirectory)
	{
		$this->templateDirectory = $templateDirectory;
	}

	/**
	 * @return string
	 */
	public function getTemplateDirectory()
	{
		return $this->templateDirectory;
	}
}
