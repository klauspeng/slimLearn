<?php

namespace Controllers\Admin;

use Controllers\Base;

class homeController extends Base
{

    public function home($req, $res, $args)
    {
        // Sample log message
        $this->ci->logger->info("testssss");

        // Render index view
        return $this->ci->renderer->render($res, 'index.phtml', $args);
    }
}