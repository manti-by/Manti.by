<?php
    /**
     * M2 Micro Framework - a micro PHP 5 framework
     *
     * @author      Alexander Chaika <marco.manti@gmail.com>
     * @copyright   2012 Alexander Chaika
     * @link        https://github.com/marco-manti/M2_micro
     * @version     0.3
     * @package     M2 Micro Framework
     * @license     https://raw.github.com/marco-manti/M2_micro/manti-by-dev/NEW-BSD-LICENSE
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

    defined('M2_MICRO') or die('Direct Access to this location is not allowed.');

    /**
     * Footer plugin
     * @name $footer
     * @package M2 Micro Framework
     * @subpackage Template
     * @author Alexander Chaika
     * @since 0.3RC3
     */

    $user = UserEntity::getInstance();
?>
<div class="left-column">
    <div class="trends">
        Alexander Chaika a.k.a. Manti&copy; 2004 - <?php echo date('Y'); ?>
    </div>
    <div class="metadesc">
        <?php echo Application::$config['metadesc_' . Application::$config['language']]; ?>
    </div>
    <div class="contact">
        <?php echo T('Contact me'); ?>: <a href="mailto:manti.by@gmail.com">manti.by@gmail.com</a> / Skype: <a href="callto://manti.by">manti.by</a>
    </div>
    <div class="copyright">
        <?php echo Application::$config['copyright_' . Application::$config['language']]; ?>
    </div>
</div>

<div class="other-column">
    <h3><?php echo T('More on this site'); ?></h3>
    <ul>
        <li>
            <a href="<?php echo Sef::getSef('index.php?module=file'); ?>">
                <?php echo T('Direct links'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo Sef::getSef('index.php?module=sitemap'); ?>" rel="index">
                <?php echo T('Sitemap'); ?>
            </a>
        </li>
        <?php if ($user->isLoggined()) : ?>
            <li>
                <a href="<?php echo Sef::getSef('index.php?module=user'); ?>">
                    <?php echo T('User dashboard'); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo Sef::getSef('index.php?module=user&action=logout'); ?>">
                    <?php echo T('Logout'); ?>
                </a>
            </li>
        <?php else : ?>
            <li>
                <a href="<?php echo Sef::getSef('index.php?module=user&action=registerform'); ?>">
                    <?php echo T('Register'); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo Sef::getSef('index.php?module=user&action=loginform'); ?>">
                    <?php echo T('Login'); ?>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>

<div class="info-column">
    <h3><?php echo T('Who am I'); ?></h3>
    <ul>
        <li>
            <a href="<?php echo Sef::getSef('index.php?module=blog&action=show&id=14'); ?>" rel="author">
                <?php echo T('For club promouters'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo Sef::getSef('index.php?module=blog&action=show&id=2'); ?>" rel="author">
                <?php echo T('For IT HRs and developers'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo Sef::getSef('index.php?module=blog&action=show&id=16'); ?>" rel="license">
                <?php echo T('Rules and Copyrights'); ?>
            </a>
        </li>
    </ul>
</div>

<div class="follow-me-column">
    <h3><?php echo T('Follow me'); ?></h3>
    <ul>
        <li>
            <a href="https://soundcloud.com/manti_by" target="_blank" rel="nofollow">
                <img src="<?php echo Application::$config['template_image_url_path']; ?>soundcloud.png" alt="Soundcloud" width="101" height="25" />
            </a>
        </li>
        <li>
            <a href="http://promodj.com/manti.by" target="_blank" rel="nofollow">
                <img src="<?php echo Application::$config['template_image_url_path']; ?>promodj.png" alt="PromoDj" width="101" height="25" />
            </a>
        </li>
        <li>
            <a href="http://www.facebook.com/manti.by" target="_blank" rel="nofollow">
                <img src="<?php echo Application::$config['template_image_url_path']; ?>facebook.png" alt="Facebook" width="101" height="25" />
            </a>
        </li>
        <li>
            <a href="http://www.vk.com/manti_by" target="_blank" rel="nofollow">
                <img src="<?php echo Application::$config['template_image_url_path']; ?>vkontakte.png" alt="Vkontakte" width="101" height="25" />
            </a>
        </li>
    </ul>
</div>

<div class="cls"></div>
