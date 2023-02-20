 <?php

    use yii\bootstrap4\Html;
    use yii\bootstrap4\Nav;
    use yii\bootstrap4\NavBar;

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light shadow-sm ',
        ],
    ]);
    $menuItems = [
        ['label' => 'Create', 'url' => ['/video/create']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/video/logout'],
            'linkOptions' => [
                'data-method' => 'post'
            ]
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    NavBar::end();
