<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerOWmtgId/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerOWmtgId/EntityManager_9a5be93.php';
require __DIR__.'/ContainerOWmtgId/getSessionService.php';
require __DIR__.'/ContainerOWmtgId/getServicesResetterService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerOWmtgId/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerOWmtgId/getSecrets_VaultService.php';
require __DIR__.'/ContainerOWmtgId/getRouting_LoaderService.php';
require __DIR__.'/ContainerOWmtgId/getMessenger_Retry_SendFailedMessageForRetryListenerService.php';
require __DIR__.'/ContainerOWmtgId/getMessenger_Middleware_SendMessageService.php';
require __DIR__.'/ContainerOWmtgId/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php';
require __DIR__.'/ContainerOWmtgId/getMessenger_DefaultBusService.php';
require __DIR__.'/ContainerOWmtgId/getMessenger_Bus_Default_Middleware_TraceableService.php';
require __DIR__.'/ContainerOWmtgId/getMessenger_Bus_Default_Middleware_HandleMessageService.php';
require __DIR__.'/ContainerOWmtgId/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerOWmtgId/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerOWmtgId/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerOWmtgId/getErrorControllerService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerOWmtgId/getDoctrineService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_Security_Access_DecisionManagerService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerOWmtgId/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerOWmtgId/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerOWmtgId/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerOWmtgId/getCache_SystemClearerService.php';
require __DIR__.'/ContainerOWmtgId/getCache_SystemService.php';
require __DIR__.'/ContainerOWmtgId/getCache_Messenger_RestartWorkersSignalService.php';
require __DIR__.'/ContainerOWmtgId/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerOWmtgId/getCache_AppClearerService.php';
require __DIR__.'/ContainerOWmtgId/getCache_AppService.php';
require __DIR__.'/ContainerOWmtgId/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerOWmtgId/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerOWmtgId/getTemplateControllerService.php';
require __DIR__.'/ContainerOWmtgId/getRedirectControllerService.php';
require __DIR__.'/ContainerOWmtgId/getNodeRepositoryService.php';
require __DIR__.'/ContainerOWmtgId/getEdgeRepositoryService.php';
require __DIR__.'/ContainerOWmtgId/getFlowControllerService.php';
require __DIR__.'/ContainerOWmtgId/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerOWmtgId/get_ServiceLocator_YxNo8ZPService.php';
require __DIR__.'/ContainerOWmtgId/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerOWmtgId/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerOWmtgId/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerOWmtgId/get_Container_Private_Security_AuthorizationCheckerService.php';
require __DIR__.'/ContainerOWmtgId/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerOWmtgId/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'K911\Swoole\Bridge\Symfony\Bundle\SwooleBundle';
$classes[] = 'Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\FlowController';
$classes[] = 'App\Repository\EdgeRepository';
$classes[] = 'App\Repository\NodeRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\HandleMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlersLocator';
$classes[] = 'Symfony\Component\Messenger\Middleware\TraceableMiddleware';
$classes[] = 'Symfony\Component\Messenger\MessageBus';
$classes[] = 'Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener';
$classes[] = 'Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\SendMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Transport\Sender\SendersLocator';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Authentication\NoopAuthenticationManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'K911\Swoole\Bridge\Symfony\HttpFoundation\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);
