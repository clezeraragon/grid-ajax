<?php

class Util {

    /**
     * @param $value = data no formato Mysql
     * @return date no formato brasileiro
     */
	public static function toView($value) {
		return date('d/m/Y', strtotime($value));
	}

    /**
     * @param $value = data e hora no formato Mysql
     * @return date e hora no formato brasileiro
     */
	public static function toTimestamps($value) {
		return date('d/m/Y - H:i:s', strtotime($value));
	}

    /**
     * @param $value = data no formato Brasileiro
     * @return date = no formato MySQL
     */
	public static function toMySQL($value) {
		$date = explode('/', $value);
		return $date[2] . '-' . $date[1] . '-' . $date[0];
	}

	public static function truncate($string, $height) {
		return current(explode('\n', wordwrap($string, $height, ' ...\n')));
	}

	public static function number($value, $decimal) {
		return number_format($value, $decimal, ',', '.');
	}

    public static function formatBoolean($value) {
        return ($value) ? "Sim" : "Não";
    }

    public static function formatStatus($value) {
        return ($value) ? "Ativo" : "Inativo";
    }

    public static function formatUrl($string)
    {
        $url_formatada = null;
        $url_formatada = static::removerAcento(trim($string));
        $url_formatada = preg_replace('/[^a-zA-Z0-9- ]/','', $url_formatada);
        $url_formatada = preg_replace('/[ ]/','-', $url_formatada);
        $url_formatada = preg_replace('/([-*]+)/','-', $url_formatada);
        return strtolower($url_formatada);
    }

    public static function removerAcento($str)
    {
        $from = "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ";
        $to = "aaaaeeiooouucAAAAEEIOOOUUC";

        $keys = array(); $values = array();
        preg_match_all('/./u', $from, $keys);
        preg_match_all('/./u', $to, $values);
        $mapping = array_combine($keys[0], $values[0]);
        return strtr($str, $mapping);
    }

}