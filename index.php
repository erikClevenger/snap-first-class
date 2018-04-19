<?php
/**
 * Created by PhpStorm.
 * User: erik
 * Date: 4/19/18
 * Time: 8:24 AM
 */

class bougie {

	private $gomerPyle;
	private $joker;

	public function getGomerPyle(): int {
		return ($this->gomerPyle);
	}

	public function getJoker(): int {
		return ($this->joker);
	}

	public function setGomerPyle(string $value): void {
		$value = trim($value);
		$value = filter_var($value, FILTER_SANITIZE_STRING);

		if(empty($value) === true) {
			throw(new InvalidArgumentException("ONE JELLY DOUGHNUT!!!"));
		}
		if(strlen($value) > 64) {
			throw(new RangeException("MY GOD I DIDN'T KNOW THEY STACKED SHIT THAT HIGH!!!"));
		}

		$this->name = $value;
	}

	public function setJoker(string $value): void {
		$value = trim($value);
		$value = filter_var($value, FILTER_SANITIZE_STRING);

		if(empty($value) === true) {
			throw(new InvalidArgumentException("ONE JELLY DOUGHNUT!!!"));
		}
		if(strlen($value) > 64) {
			throw(new RangeException("MY GOD I DIDN'T KNOW THEY STACKED SHIT THAT HIGH!!!"));
		}

		$this->nickname = $value;
	}
}

