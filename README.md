# EVWidgetBundle
Widget bundle provides object oriented widgets and dashboards.

## Features
- Create widgets easily
- Create and organize dashboards/panels

## Installation

In composer.json file, add :
```json
{
    "repositories": [
        {
            "type": "git",
            "url":  "git@github.com:evalandgo/EVWidgetBundle.git"
        }
    ],
    "require": {
        "ev/ev-widget-bundle": "dev-master"
    }
}
```
For download this bundle, a permission is requiered on this repository and the Composer needs to use a **SSH** connexion on GitHub.

More informations : [Generating SSH Keys](https://help.github.com/articles/generating-ssh-keys).

In app/AppKernel.php file, add :
```php
public function registerBundles()
{
    return array(
        // ...
        new EV\WidgetBundle\EVWidgetBundle(),
        // ...
    );
}
```

## Configuration

In config.yml
```yaml
...
```

## Widget's usage example

### Basic usage

In controller :
```php
// Acme\MainBundle\Controller\DashboardController.php

public function indexAction() {
        
    $factoryWidget = $this->container->get('ev_widget.factory.widget');

    $widget = $factoryWidget->createWidgetBuilder()
            ->addLayouts(array(
                'header' => 'Header',
                'body' => 'Body',
                'footer' => 'Footer'
            ))
            ->addOptionButton(array(
                'label' => 'Button'
            ))
            ->addOptionDropdown(array(
                'label' => 'Dropdown',
                'actions' => array(
                    'First Action',
                    'Second Action'
                )
            ));

    return array(
        'widget' => $widgetBuilder->createView(),
    );
}
```

In TWIG :
```jinja
{# Acme\MainBundle\Resources\view\Widget\index.html.twig #}

<div class="container">
    <h1>Widget</h1>
    <div class="row">
        <div class="col-sm-12">
            {{ ev_widget_render(widget) }}
        </div>
    </div>
</div>
```

### With a WidgetType object

In a WidgetType object :
```php
// Acme\MainBundle\Widget\NotificationWidgetType.php

namespace Acme\MainBundle\Widget;

use EV\WidgetBundle\WidgetType\AbstractWidgetType;
use EV\WidgetBundle\Builder\WidgetBuilder;
use Symfony\Component\Templating\EngineInterface;

class NotificationWidgetType extends AbstractWidgetType {
    
    protected $templating;
    
    public function __construct(EngineInterface $templating) {
        $this->templating = $templating;
    }
    
    public function buildWidget(WidgetBuilder $widgetBuilder) {
        
        $widgetBuilder->setCustomParameters(array(
                            'widgetClass' => 'panel-warning'
                        ));
        
        $widgetBuilder->addLayouts(array(
                            'header' => $this->templating->render('AcmeMainBundle:Widget:Type/Notification/header.html.twig'),
                            'body' => $this->templating->render('AcmeMainBundle:Widget:Type/Notification/body.html.twig')
                        ));

        $widgetBuilder->addOptionDropdown(array(
                            'label' => '<span class="glyphicon glyphicon-cog"></span>',
                            'actions' => array(
                                'First Action',
                                'Second Action'
                            )
                        ));
        
        return $widgetBuilder;
    }
    
    public function getName() {
        return 'widget_notification';
    }
    
}
```

In controller
```php
// Acme\MainBundle\Controller\DashboardController.php

use Acme\MainBundle\Widget\NotificationWidgetType;

public function indexAction() {
        
    $factoryWidget = $this->container->get('ev_widget.factory.widget');

    $widgetBuilder = $factoryWidget->createWidgetFromType(new NotificationWidgetType($this->container->get('templating')));

    return array(
        'widget' => $widgetBuilder->createView(),
    );
}
```


## Panel's usage example

### Basic usage

In controller
```php
// Acme\MainBundle\Controller\DashboardController.php

use Acme\MainBundle\Widget\NotificationWidgetType;
use Acme\MainBundle\Widget\MapWidgetType;

public function indexAction() {
        
    $factoryWidget = $this->container->get('ev_widget.factory.widget');

    $widget1Builder = $factoryWidget->createWidgetFromType(new NotificationWidgetType($this->container->get('templating')));
    $widget2Builder = $factoryWidget->createWidgetFromType(new MapWidgetType($this->container->get('templating')));

    $factoryPanel = $this->container->get('ev_widget.factory.panel');

    $panelBuilder = $factoryPanel->createPanelBuilder()
            ->addPanelElement(array(
                'width' => 6,
                'position' => 1,
                'element' => $widget1Builder->createView()
            ))
            ->addPanelElement(array(
                'width' => 6,
                'position' => 2,
                'element' => $widget2Builder->createView()
            ));


    return array(
        'panel' => $panelBuilder->createView(),
    );
}
```

In TWIG
```jinja
{# Acme\MainBundle\Resources\view\Panel\index.html.twig #}

<div class="container">
    <h1>Panel</h1>
    {{ ev_panel_render(panel) }}
</div>
```

## How to create a custom Panel Element
...

## How to create a custom widget template
...

## How to create a custom panel template
...
