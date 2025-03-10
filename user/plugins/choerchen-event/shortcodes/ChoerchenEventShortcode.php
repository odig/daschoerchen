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
                'partials/choerchen_availibility_form.html.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerchen-availibility', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/choerchen_availibility.html.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerchen-events', function(ShortcodeInterface $sc) {

            $event_path = $sc->getParameter('events');
            $start = $sc->getParameter('start');
            $end = $sc->getParameter('end');
            $limit = $sc->getParameter('limit');

            return $this->twig->processTemplate(
                'partials/choerchen_events.txt.twig',
                [
                    'page' => $this->grav['page'], 
                    'event_path' => "$event_path",
                    'start' => "$start",
                    'end' => "$end",
                    'limit' => "$limit"
                ]
            );

        });
        $this->shortcode->getHandlers()->add('choerchen-events-table', function(ShortcodeInterface $sc) {

            $event_path = $sc->getParameter('events');
            $start = $sc->getParameter('start');
            $end = $sc->getParameter('end');

            return $this->twig->processTemplate(
                'partials/choerchen_events_table.txt.twig',
                [
                    'page' => $this->grav['page'], // used for image resizing
                    'event_path' => "$event_path",
                    'start' => "$start",
                    'end' => "$end"
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