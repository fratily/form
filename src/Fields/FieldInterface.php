<?php
/**
 * FratilyPHP Form
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.
 * Redistributions of files must retain the above copyright notice.
 *
 * @author      Kento Oka <kento-oka@kentoka.com>
 * @copyright   (c) Kento Oka
 * @license     MIT
 * @since       1.0.0
 */
namespace Fratily\Form\Fields;

/**
 *
 */
interface FieldInterface{

    /**
     * フィールドインスタンスを生成する
     *
     * @param   string  $name
     *  フィールド名
     *
     * @return  static
     */
    public static function build(string $name);

    /**
     * デフォルト値を設定する
     */
    public function setDefault();

}