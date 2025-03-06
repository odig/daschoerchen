<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Page\Media;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ChoerchenEventShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('choerchen-availibility-form', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/xchoerchen_availibility_form.html.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerchen-availibility', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/xchoerchen_availibility.html.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerchen-events', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/choerchen_events.txt.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerchen-events-table', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/choerchen_events_table.txt.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerlis', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/choerlis_table.txt.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
    }
}