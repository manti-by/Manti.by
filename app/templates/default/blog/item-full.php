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
     * Full blog post template
     * @author Alexander Chaika
     * @package M2 Micro Framework
     * @subpackage Template
     * @since 0.1
     */

    $options['context'] = 'full';
    $user = UserEntity::getInstance();
?>
<div class="post-item <?php if ($options['data']->is_music == 1) { ?>post-item-full<?php } else { ?>blog-post<?php }; ?>">

    <?php if (json_decode($options['data']->covers)) : ?>
        <div class="cover">
            <?php if ($options['context'] == 'short') : ?>
            <a href="<?php echo Sef::getSef('index.php?module=blog&action=show&id=' . $options['data']->id); ?>">
                <?php endif; ?>
                <?php echo File::getHtml($options['data']->covers, FileEntity::TYPE_COVERS); ?>
                <?php if ($options['context'] == 'short') : ?>
            </a>
        <?php endif; ?>
        </div>
    <?php endif; ?>

    <h1>
        <?php echo $options['data']->name . (!empty($options['data']->genre) ? ' /' . $options['data']->genre.  '/' : ''); ?>

        <?php if ($user->getGroup() == 'Root') : ?>
            <div class="fr admin-buttons">
                <a href="<?php echo Sef::getSef('index.php?module=blog&action=edit&id=' . $options['data']->id); ?>"><?php echo T('Edit'); ?></a>
                <a href="<?php echo Sef::getSef('index.php?module=blog&action=delete&id=' . $options['data']->id); ?>" class="ajax" callback="$(self).closest('.post-item-full').remove();"><?php echo T('Delete'); ?></a>
            </div>
        <?php endif; ?>
    </h1>

    <div class="description">
        <?php if ($options['data']->is_music == 1) : ?>
            <?php echo nl2br($options['data']->description); ?>
        <?php else: ?>
            <?php echo $options['data']->description; ?>
        <?php endif; ?>
    </div>

    <?php echo $this->getContents('blog', 'music-block', $options); ?>
</div>

<?php if (json_decode($options['data']->relations)) : ?>
    <div class="relations">
        <h2><?php echo T('Similar posts'); ?></h2>
        <div class="relation-wrapper">
            <?php echo Relations::getHtml($options['data']->relations); ?>
        </div>
    </div>
<?php endif; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $.get('<?php echo Sef::getSef('index.php?module=blog&action=track&id=' . $options['data']->id)?>');
    });
</script>
