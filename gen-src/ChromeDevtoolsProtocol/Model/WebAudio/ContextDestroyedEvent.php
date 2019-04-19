<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that existing BaseAudioContext has been destroyed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContextDestroyedEvent implements \JsonSerializable
{
	/** @var string */
	public $contextId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		return $data;
	}
}
