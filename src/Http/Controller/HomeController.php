<?php

namespace Mlab\SimpleWebSite\Http\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Mlab\SimpleWebSite\Domain\Model\DataModel;
use Mlab\SimpleWebSite\View\Home;

class HomeController extends Controller
{

    public function index()
    {

        $viewRenderer = new Home();
        $data = [
            'title' => 'Hello Page',
            'message' => 'Hello, world!',
        ];
        $viewRenderer->render($data);
    }

    public function saveContact(Request $request, Response $response): Response
    {

        $parsedBody = $request->getParsedBody();

        $data = new DataModel();
        $data->email = $parsedBody['email'];
        $data->marketing = true;
        $data->save();

        return $response->withStatus(201);

    }
}
