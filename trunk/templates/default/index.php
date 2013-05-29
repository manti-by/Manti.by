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
     * Default template file
     * @name $template-index
     * @package M2 Micro Framework
     * @subpackage Template
     * @author Alexander Chaika
     * @since 0.1
     */
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo strip_tags($options['title']); ?></title>

        <meta charset="utf-8" />
        <meta name="description" content="<?php echo Model::getModel('tag')->getMetadescString(); ?>" />
        <meta name="keywords" content="<?php echo Model::getModel('tag')->getMetakeysString(); ?>" />
        <meta name="yandex-verification" content="6765012bcd05fac2" />

        <link type="text/css" rel="stylesheet" href="<?php echo Application::$config['http_host']; ?>/assets/css/default.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Application::$config['http_host']; ?>/templates/default/style.css" />

        <link type="text/css" rel="stylesheet" href="<?php echo Application::$config['http_host']; ?>/templates/default/print.css" media="print" />

        <?php if (preg_match('/MSIE/i', $_SERVER['HTTP_USER_AGENT'])) : ?>
            <link type="text/css" rel="stylesheet" href="<?php echo Application::$config['http_host']; ?>/templates/default/ie.css" />
        <?php endif; ?>

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Application::$config['http_host']; ?>/assets/js/default.js"></script>
        <script type="text/javascript" src="<?php echo Application::$config['http_host']; ?>/templates/default/default.js"></script>
    </head>
    <body>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-39793152-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter20835088 = new Ya.Metrika({id:20835088,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true});
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="//mc.yandex.ru/watch/20835088" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <?php echo $this->getContents('plugin', 'gototop'); ?>
        <?php echo $this->getContents('plugin', 'ajax'); ?>
        <?php echo $this->getContents('plugin', 'popup'); ?>
        <?php echo $this->getContents('plugin', 'loader'); ?>
        <?php echo $this->getContents('plugin', 'messages'); ?>
        <?php echo $this->getContents('partial', 'usermenu', array('data' => $options['data'])); ?>

        <div id="header">
            <div class="wrapper">
                <?php echo $this->getContents('partial', 'topmenu', $options); ?>
                <?php echo $this->getContents('partial', 'toolbar'); ?>
                <div class="cls"></div>
            </div>
        </div>

        <div id="content" class="wrapper">
            <?php echo $options['body']; ?>
        </div>


        <div id="footer">
            <div class="wrapper">
                <?php echo $this->getContents('partial', 'footer'); ?>
            </div>
        </div>

        <?php echo $this->getContents('plugin', 'debug'); ?>
    </body>
</html>