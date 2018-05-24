<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // app_admin_index
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\AdminController::index',  '_route' => 'app_admin_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_app_admin_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_admin_index'));
                }

                return $ret;
            }
            not_app_admin_index:

            if (0 === strpos($pathinfo, '/admin/add-')) {
                // app_admin_addsejour
                if ('/admin/add-sejour' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::addSejour',  '_route' => 'app_admin_addsejour',);
                }

                // app_admin_addactivites
                if ('/admin/add-activites' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::addActivites',  '_route' => 'app_admin_addactivites',);
                }

                // app_admin_addregion
                if ('/admin/add-region' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::addRegion',  '_route' => 'app_admin_addregion',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/delete-')) {
                // app_admin_deletesejour
                if (0 === strpos($pathinfo, '/admin/delete-sejour') && preg_match('#^/admin/delete\\-sejour/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_deletesejour')), array (  '_controller' => 'App\\Controller\\AdminController::deleteSejour',));
                }

                // app_admin_deleteactivites
                if (0 === strpos($pathinfo, '/admin/delete-activite') && preg_match('#^/admin/delete\\-activite/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_deleteactivites')), array (  '_controller' => 'App\\Controller\\AdminController::deleteActivites',));
                }

                // app_admin_deleteregion
                if (0 === strpos($pathinfo, '/admin/delete-region') && preg_match('#^/admin/delete\\-region/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_deleteregion')), array (  '_controller' => 'App\\Controller\\AdminController::deleteRegion',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // api_users_get_collection
                if (preg_match('#^/api/users(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\User',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_users_get_collection;
                    }

                    return $ret;
                }
                not_api_users_get_collection:

                // api_users_post_collection
                if (preg_match('#^/api/users(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\User',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_users_post_collection;
                    }

                    return $ret;
                }
                not_api_users_post_collection:

                // api_users_get_item
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\User',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_users_get_item;
                    }

                    return $ret;
                }
                not_api_users_get_item:

                // api_users_delete_item
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\User',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_users_delete_item;
                    }

                    return $ret;
                }
                not_api_users_delete_item:

                // api_users_put_item
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\User',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_users_put_item;
                    }

                    return $ret;
                }
                not_api_users_put_item:

            }

        }

        // app_index_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\IndexController::index',  '_route' => 'app_index_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_index_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_index_index'));
            }

            return $ret;
        }
        not_app_index_index:

        if (0 === strpos($pathinfo, '/profil')) {
            // app_profil_index
            if ('/profil' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ProfilController::index',  '_route' => 'app_profil_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_app_profil_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_profil_index'));
                }

                return $ret;
            }
            not_app_profil_index:

            if (0 === strpos($pathinfo, '/profil/edit-')) {
                // app_profil_editimg
                if ('/profil/edit-image' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProfilController::editImg',  '_route' => 'app_profil_editimg',);
                }

                // app_profil_editname
                if ('/profil/edit-name' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProfilController::editName',  '_route' => 'app_profil_editname',);
                }

                // app_profil_editemail
                if ('/profil/edit-email' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProfilController::editEmail',  '_route' => 'app_profil_editemail',);
                }

                // app_profil_editage
                if ('/profil/edit-age' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProfilController::editAge',  '_route' => 'app_profil_editage',);
                }

                // app_profil_editactivities
                if ('/profil/edit-activites' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProfilController::editActivities',  '_route' => 'app_profil_editactivities',);
                }

                // app_profil_editdate
                if ('/profil/edit-date' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ProfilController::editDate',  '_route' => 'app_profil_editdate',);
                }

            }

            // app_profil_delete
            if (0 === strpos($pathinfo, '/profil/delete') && preg_match('#^/profil/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profil_delete')), array (  '_controller' => 'App\\Controller\\ProfilController::delete',));
            }

        }

        // app_search_index
        if ('/search' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SearchController::index',  '_route' => 'app_search_index',);
        }

        if (0 === strpos($pathinfo, '/sejour')) {
            // app_sejour_index
            if ('/sejour' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\SejourController::index',  '_route' => 'app_sejour_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_app_sejour_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_sejour_index'));
                }

                return $ret;
            }
            not_app_sejour_index:

            // app_sejour_details
            if (0 === strpos($pathinfo, '/sejour/detail') && preg_match('#^/sejour/detail(?:/(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_sejour_details')), array (  'id' => NULL,  '_controller' => 'App\\Controller\\SejourController::details',));
            }

        }

        // app_security_register
        if ('/inscription' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::register',  '_route' => 'app_security_register',);
        }

        // app_security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'app_security_login',);
        }

        // app_security_logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'app_security_logout');
        }

        // app_user_index
        if ('/user' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'app_user_index',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
