<?php
    defined('M2_MICRO') or die('Direct Access to this location is not allowed.');

    /**
     * M2 Micro Framework - a micro PHP 5 framework
     *
     * @author      Alexander Chaika <marco.manti@gmail.com>
     * @copyright   2012 Alexander Chaika
     * @link        https://github.com/marco-manti/M2_micro
     * @license     https://raw.github.com/marco-manti/M2_micro/manti-by-dev/NEW-BSD-LICENSE
     * @version     0.3
     * @package     M2 Micro Framework
     *
     * NEW BSD LICENSE
     *
     * All rights reserved.
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions are met:
     *  * Redistributions of source code must retain the above copyright
     * notice, this list of conditions and the following disclaimer.
     *  * Redistributions in binary form must reproduce the above copyright
     * notice, this list of conditions and the following disclaimer in the
     * documentation and/or other materials provided with the distribution.
     *  * Neither the name of the "M2 Micro Framework" nor "manti.by" nor the
     * names of its contributors may be used to endorse or promote products
     * derived from this software without specific prior written permission.

     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
     * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
     * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
     * DISCLAIMED. IN NO EVENT SHALL COPYRIGHT HOLDER BE LIABLE FOR ANY
     * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
     * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
     * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
     * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
     * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     */

    /**
     * Top menu plugin
     * @name $topmenu
     * @package M2 Micro Framework
     * @subpackage Template
     * @author Alexander Chaika
     * @since 0.1
     */

    $user = UserEntity::getInstance();
    $username = $user->getUsername();
    $salutation = !empty($username) ? $username : $user->getEmail();
?>
<?php if ($user->isLoggined()) : ?>
<div id="usermenu">
    <?php echo T('Hi') . ' ' . $salutation; ?>!
    <a href="<?php echo Sef::getSef('index.php?module=user&action=dashboard');?>"><?php echo T('Dashboard'); ?></a> |
    <a href="<?php echo Sef::getSef('index.php?module=user&action=logout'); ?>"><?php echo T('Sign Out'); ?></a>
</div>
<?php endif; ?>

<a href="<?php echo Application::$config['http_host']; ?>" class="fl">
    <img src="<?php echo Application::$config['template_image_url_path']; ?>logo.png" alt="Manti Logo" width="114" height="56" />
</a>
<ul id="topmenu" class="fl">
    <li><a href="<?php echo Application::$config['http_host']; ?>"><?php echo T('Home'); ?></a></li>
    <li><a href="<?php echo Sef::getSef('index.php?module=blog'); ?>"><?php echo T('Blog'); ?></a></li>
    <li><a href="<?php echo Sef::getSef('index.php?module=gallery'); ?>"><?php echo T('Gallery'); ?></a></li>
    <li><a href="<?php echo Sef::getSef('index.php?module=file'); ?>"><?php echo T('Download'); ?></a></li>
    <li><a href="<?php echo Sef::getSef('index.php?module=blog&action=show&id=4'); ?>"><?php echo T('About'); ?></a></li>
</ul>