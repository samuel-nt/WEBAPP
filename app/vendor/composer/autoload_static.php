<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit881e965573dd6156ee1193475dc031fc
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebApp\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'League\\Route\\' => 13,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'League\\Route\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/route/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'League\\Route\\ContainerAwareInterface' => __DIR__ . '/..' . '/league/route/src/ContainerAwareInterface.php',
        'League\\Route\\ContainerAwareTrait' => __DIR__ . '/..' . '/league/route/src/ContainerAwareTrait.php',
        'League\\Route\\Dispatcher' => __DIR__ . '/..' . '/league/route/src/Dispatcher.php',
        'League\\Route\\Http\\Exception' => __DIR__ . '/..' . '/league/route/src/Http/Exception.php',
        'League\\Route\\Http\\Exception\\BadRequestException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/BadRequestException.php',
        'League\\Route\\Http\\Exception\\ConflictException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/ConflictException.php',
        'League\\Route\\Http\\Exception\\ExpectationFailedException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/ExpectationFailedException.php',
        'League\\Route\\Http\\Exception\\ForbiddenException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/ForbiddenException.php',
        'League\\Route\\Http\\Exception\\GoneException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/GoneException.php',
        'League\\Route\\Http\\Exception\\HttpExceptionInterface' => __DIR__ . '/..' . '/league/route/src/Http/Exception/HttpExceptionInterface.php',
        'League\\Route\\Http\\Exception\\ImATeapotException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/ImATeapotException.php',
        'League\\Route\\Http\\Exception\\LengthRequiredException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/LengthRequiredException.php',
        'League\\Route\\Http\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/MethodNotAllowedException.php',
        'League\\Route\\Http\\Exception\\NotAcceptableException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/NotAcceptableException.php',
        'League\\Route\\Http\\Exception\\NotFoundException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/NotFoundException.php',
        'League\\Route\\Http\\Exception\\PreconditionFailedException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/PreconditionFailedException.php',
        'League\\Route\\Http\\Exception\\PreconditionRequiredException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/PreconditionRequiredException.php',
        'League\\Route\\Http\\Exception\\TooManyRequestsException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/TooManyRequestsException.php',
        'League\\Route\\Http\\Exception\\UnauthorizedException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/UnauthorizedException.php',
        'League\\Route\\Http\\Exception\\UnavailableForLegalReasonsException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/UnavailableForLegalReasonsException.php',
        'League\\Route\\Http\\Exception\\UnprocessableEntityException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/UnprocessableEntityException.php',
        'League\\Route\\Http\\Exception\\UnsupportedMediaException' => __DIR__ . '/..' . '/league/route/src/Http/Exception/UnsupportedMediaException.php',
        'League\\Route\\Middleware\\MiddlewareAwareInterface' => __DIR__ . '/..' . '/league/route/src/Middleware/MiddlewareAwareInterface.php',
        'League\\Route\\Middleware\\MiddlewareAwareTrait' => __DIR__ . '/..' . '/league/route/src/Middleware/MiddlewareAwareTrait.php',
        'League\\Route\\Route' => __DIR__ . '/..' . '/league/route/src/Route.php',
        'League\\Route\\RouteCollectionInterface' => __DIR__ . '/..' . '/league/route/src/RouteCollectionInterface.php',
        'League\\Route\\RouteCollectionTrait' => __DIR__ . '/..' . '/league/route/src/RouteCollectionTrait.php',
        'League\\Route\\RouteConditionHandlerInterface' => __DIR__ . '/..' . '/league/route/src/RouteConditionHandlerInterface.php',
        'League\\Route\\RouteConditionHandlerTrait' => __DIR__ . '/..' . '/league/route/src/RouteConditionHandlerTrait.php',
        'League\\Route\\RouteGroup' => __DIR__ . '/..' . '/league/route/src/RouteGroup.php',
        'League\\Route\\Router' => __DIR__ . '/..' . '/league/route/src/Router.php',
        'League\\Route\\Strategy\\AbstractStrategy' => __DIR__ . '/..' . '/league/route/src/Strategy/AbstractStrategy.php',
        'League\\Route\\Strategy\\ApplicationStrategy' => __DIR__ . '/..' . '/league/route/src/Strategy/ApplicationStrategy.php',
        'League\\Route\\Strategy\\JsonStrategy' => __DIR__ . '/..' . '/league/route/src/Strategy/JsonStrategy.php',
        'League\\Route\\Strategy\\StrategyAwareInterface' => __DIR__ . '/..' . '/league/route/src/Strategy/StrategyAwareInterface.php',
        'League\\Route\\Strategy\\StrategyAwareTrait' => __DIR__ . '/..' . '/league/route/src/Strategy/StrategyAwareTrait.php',
        'League\\Route\\Strategy\\StrategyInterface' => __DIR__ . '/..' . '/league/route/src/Strategy/StrategyInterface.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Psr\\Http\\Server\\MiddlewareInterface' => __DIR__ . '/..' . '/psr/http-server-middleware/src/MiddlewareInterface.php',
        'Psr\\Http\\Server\\RequestHandlerInterface' => __DIR__ . '/..' . '/psr/http-server-handler/src/RequestHandlerInterface.php',
        'WebApp\\controllers\\cItems' => __DIR__ . '/../..' . '/controllers/cItems.php',
        'WebApp\\controllers\\cMain' => __DIR__ . '/../..' . '/controllers/cMain.php',
        'WebApp\\controllers\\cUsers' => __DIR__ . '/../..' . '/controllers/cUsers.php',
        'WebApp\\helpers\\request' => __DIR__ . '/../..' . '/helpers/request.php',
        'WebApp\\lib\\db\\conexion' => __DIR__ . '/../..' . '/lib/db/conexion.php',
        'WebApp\\lib\\views\\baseView' => __DIR__ . '/../..' . '/lib/views/baseView.php',
        'WebApp\\models\\mItem' => __DIR__ . '/../..' . '/models/mItem.php',
        'WebApp\\models\\mUser' => __DIR__ . '/../..' . '/models/mUser.php',
        'WebApp\\models\\selects' => __DIR__ . '/../..' . '/models/selects.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit881e965573dd6156ee1193475dc031fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit881e965573dd6156ee1193475dc031fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit881e965573dd6156ee1193475dc031fc::$classMap;

        }, null, ClassLoader::class);
    }
}
