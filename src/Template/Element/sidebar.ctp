<?php if ($authUser): ?>
    <div>
        <?= $this->element('users/user_menu'); ?>
    </div>
<?php endif; ?>

<div>
    <h2>
        About
    </h2>
    <p>
        Commentaries are published weekly and distributed through the
        <em>Indianapolis Star</em> and many other print
        and online publications.
        <a href="#" id="disclaimer_toggler" data-toggle="collapse" data-target="#commentary_disclaimer">
            Disclaimer
        </a>
    </p>
</div>

<div>
    <?= $this->Html->link(
        '<img src="/data_center/img/icons/feed.png" role="presentation" /> <span>RSS Feed</span>',
        [
            'controller' => 'commentaries',
            'action' => 'rss',
            'ext' => 'rss',
            'plugin' => false,
            'admin' => false
        ],
        [
            'escape' => false,
            'class' => 'with_icon'
        ]
    ); ?>
</div>

<div id="commentary_disclaimer" class="collapse">
    <h2>
        Disclaimer
    </h2>
    <p>
        The views expressed here are solely those of the author, and do not represent those of funders, associations, any entity of Ball State University, or its governing body.
    </p>
</div>

<?= $this->element('commentaries/recent'); ?>

<div class="top_tags">
    <h2>
        Top Tags
    </h2>
    <?= $this->element('commentaries/top_tags'); ?>
    <div class="browse_all">
        <?= $this->Html->link(
            'Browse all tags',
            [
                'controller' => 'commentaries',
                'action' => 'tags',
                'admin' => false,
                'plugin' => false
            ]
        ); ?>
    </div>
</div>

<?php if (!$authUser): ?>
    <div>
        <?= $this->Html->link(
            'Reporter / Admin Login',
            [
                'controller' => 'users',
                'action' => 'login',
                'admin' => false,
                'plugin' => false
            ]
        ); ?>
    </div>
<?php endif; ?>
