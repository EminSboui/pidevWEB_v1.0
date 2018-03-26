<?php

/* dashboard.html.twig */
class __TwigTemplate_e208204b1b6f05f3d84dacdbb4929c73850d3d811113d79292a6aaa77f4ee558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b89b7561b90d8ae09e6f72663ed684112f57cd7316ac847b1a1252867881618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b89b7561b90d8ae09e6f72663ed684112f57cd7316ac847b1a1252867881618->enter($__internal_7b89b7561b90d8ae09e6f72663ed684112f57cd7316ac847b1a1252867881618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_ea1cc0523e5de17225fcd0c9f5b0f2531c4593027138aaf9c47e5d93c1d8b5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1cc0523e5de17225fcd0c9f5b0f2531c4593027138aaf9c47e5d93c1d8b5c5->enter($__internal_ea1cc0523e5de17225fcd0c9f5b0f2531c4593027138aaf9c47e5d93c1d8b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
    <meta name=\"description\" content=\"Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimal-ui\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-barstyle\" content=\"black-translucent\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/logo.png"), "html", null, true);
        echo "\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Flatkit\">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <link rel=\"shortcut icon\" sizes=\"196x196\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/logo.png"), "html", null, true);
        echo "\">

    <!-- style -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/animate.css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/glyphicons/glyphicons.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/material-design-icons/material-design-icons.css"), "html", null, true);
        echo "\"
          type=\"text/css\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/styles/app.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <!-- endbuild -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/assets/styles/font.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
</head>
<body>
<div class=\"app\" id=\"app\">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <div id=\"aside\" class=\"app-aside modal fade nav-dropdown\">
        <!-- fluid app aside -->
        <div class=\"left navside dark dk\" layout=\"column\">
            <div class=\"navbar no-radius\">
                <!-- brand -->
                <a class=\"navbar-brand\">
                    <div ui-include=\"'";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/logo.png"), "html", null, true);
        echo "'\"></div>
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/logo.png"), "html", null, true);
        echo "\" alt=\".\" class=\"hide\">
                    <span class=\"hidden-folded inline\">Flatkit</span>
                </a>
                <!-- / brand -->
            </div>
            <div flex class=\"hide-scroll\">
                <nav class=\"scroll nav-light\">

                    <ul class=\"nav\" ui-nav>
                        <li class=\"nav-header hidden-folded\">
                            <small class=\"text-muted\">Main</small>
                        </li>

                        <li>
                            <a href=\"dashboard.html\">
                    <span class=\"nav-icon\">
                      <i class=\"material-icons\">&#xe3fc;
                        <span ui-include=\"'";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/i_0.svg"), "html", null, true);
        echo "'\"></span>
                      </i>
                    </span>
                                <span class=\"nav-text\">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a>
                    <span class=\"nav-caret\">
                      <i class=\"fa fa-caret-down\"></i>
                    </span>
                                <span class=\"nav-label\">
                      <b class=\"label rounded label-sm primary\">5</b>
                    </span>
                                <span class=\"nav-icon\">
                      <i class=\"material-icons\">&#xe5c3;
                        <span ui-include=\"'";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/i_1.svg"), "html", null, true);
        echo "'\"></span>
                      </i>
                    </span>
                            </a></li></ul></nav></div>
        </div>
    </div>
    <!-- / -->

    <!-- content -->
    <div id=\"content\" class=\"app-content box-shadow-z0\" role=\"main\">
        <div class=\"app-header white box-shadow\">
            <div class=\"navbar\">
                <!-- Open side - Naviation on mobile -->
                <a data-toggle=\"modal\" data-target=\"#aside\" class=\"navbar-item pull-left hidden-lg-up\">
                    <i class=\"material-icons\">&#xe5d2;</i>
                </a>
                <!-- / -->

                <!-- Page title - Bind to \$state's title -->
                <div class=\"navbar-item pull-left h5\" ng-bind=\"\$state.current.data.title\" id=\"pageTitle\"></div>

                <!-- navbar right -->
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"nav-item dropdown pos-stc-xs\">
                        <a class=\"nav-link\" href data-toggle=\"dropdown\">
                            <i class=\"material-icons\">&#xe7f5;</i>
                            <span class=\"label label-sm up warn\">3</span>
                        </a>
                        <div ui-include=\"'";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../views/blocks/dropdown.notification.html'\"></div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link clear\" href data-toggle=\"dropdown\">
                  <span class=\"avatar w-32\">
                    <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a0.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    <i class=\"on b-white bottom\"></i>
                  </span>
                        </a>
                        <div ui-include=\"'../views/blocks/dropdown.user.html'\"></div>
                    </li>
                    <li class=\"nav-item hidden-md-up\">
                        <a class=\"nav-link\" data-toggle=\"collapse\" data-target=\"#collapse\">
                            <i class=\"material-icons\">&#xe5d4;</i>
                        </a>
                    </li>
                </ul>
                <!-- / navbar right -->

                <!-- navbar collapse -->
                <div class=\"collapse navbar-toggleable-sm\" id=\"collapse\">
                    <div ui-include=\"'";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../views/blocks/navbar.form.right.html'\"></div>
                    <!-- link and dropdown -->
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href data-toggle=\"dropdown\">
                                <i class=\"fa fa-fw fa-plus text-muted\"></i>
                                <span>New</span>
                            </a>
                            <div ui-include=\"'../views/blocks/dropdown.new.html'\"></div>
                        </li>
                    </ul>
                    <!-- / -->
                </div>
                <!-- / navbar collapse -->
            </div>
        </div>
        <div class=\"app-footer\">
            <div class=\"p-a text-xs\">
                <div class=\"pull-right text-muted\">
                    &copy; Copyright <strong>Flatkit</strong> <span
                            class=\"hidden-xs-down\">- Built with Love v1.1.3</span>
                    <a ui-scroll-to=\"content\"><i class=\"fa fa-long-arrow-up p-x-sm\"></i></a>
                </div>
                <div class=\"nav\">
                    <a class=\"nav-link\" href=\"../\">About</a>
                    <span class=\"text-muted\">-</span>
                    <a class=\"nav-link label accent\" href=\"http://themeforest.net/user/flatfull/portfolio?ref=flatfull\">Get
                        it</a>
                </div>
            </div>
        </div>
        <div ui-view class=\"app-body\" id=\"view\">

            <!-- ############ PAGE START-->
            <div class=\"p-a white lt box-shadow\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h4 class=\"m-b-0 _300\">Welcome to Flatkit</h4>
                        <small class=\"text-muted\">Bootstrap <strong>4</strong> Web App Kit with AngularJS</small>
                    </div>
                    <div class=\"col-sm-6 text-sm-right\">
                        <div class=\"m-y-sm\">
                            <span class=\"m-r-sm\">Start manage:</span>
                            <div class=\"btn-group dropdown\">
                                <button class=\"btn white btn-sm \">Projects</button>
                                <button class=\"btn white btn-sm dropdown-toggle\" data-toggle=\"dropdown\"></button>
                                <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                    <a class=\"dropdown-item\" href>Members</a>
                                    <a class=\"dropdown-item\" href>Tasks</a>
                                    <a class=\"dropdown-item\" href>Inbox</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"padding\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"box p-a\">
                            <div class=\"pull-left m-r\">
\t            <span class=\"w-48 rounded  accent\">
\t              <i class=\"material-icons\">&#xe151;</i>
\t            </span>
                            </div>
                            <div class=\"clear\">
                                <h4 class=\"m-a-0 text-lg _300\"><a href>125 <span class=\"text-sm\">Emails</span></a></h4>
                                <small class=\"text-muted\">6 new arrivals.</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <div class=\"box p-a\">
                            <div class=\"pull-left m-r\">
\t            <span class=\"w-48 rounded primary\">
\t              <i class=\"material-icons\">&#xe54f;</i>
\t            </span>
                            </div>
                            <div class=\"clear\">
                                <h4 class=\"m-a-0 text-lg _300\"><a href>40 <span class=\"text-sm\">Projects</span></a></h4>
                                <small class=\"text-muted\">38 open.</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <div class=\"box p-a\">
                            <div class=\"pull-left m-r\">
\t            <span class=\"w-48 rounded warn\">
\t              <i class=\"material-icons\">&#xe8d3;</i>
\t            </span>
                            </div>
                            <div class=\"clear\">
                                <h4 class=\"m-a-0 text-lg _300\"><a href>600 <span class=\"text-sm\">Users</span></a></h4>
                                <small class=\"text-muted\">632 vips.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Projects monitor</h3>
                                <small>Calculated in last 30 days</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"text-center m-b\">
                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-sm white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Month
                                        </label>
                                        <label class=\"btn btn-sm white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Day
                                        </label>
                                    </div>
                                </div>
                                <div ui-jp=\"plot\" ui-refresh=\"app.setting.color\" ui-options=\"
\t              [
\t                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]],
\t                  points: { show: true, radius: 0},
                  \t  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
\t                },
\t                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]],
\t                  points: { show: true, radius: 0},
                  \t  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
\t                },
\t                { data: [[1, 2], [2, 1.6], [3, 2.4], [4, 2.1], [5, 1.7], [6, 1.5], [7, 1.7]],
\t                  points: { show: true, radius: 0},
                  \t  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
\t                }
\t              ],
\t              {
\t                colors: ['#a88add','#0cc2aa','#fcc100'],
\t                series: { shadowSize: 3 },
\t                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
\t                yaxis:{ show: true, font: { color: '#ccc' }},
\t                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
\t                tooltip: true,
\t                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
\t              }
\t            \" style=\"height:188px\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Tasks</h3>
                                <small>Calculated in last 7 days</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"text-center m-b\">
                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> This Month
                                        </label>
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> This Week
                                        </label>
                                    </div>
                                </div>
                                <div ui-jp=\"plot\" ui-refresh=\"app.setting.color\" ui-options=\"
\t              [
\t                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] }
\t              ],
\t              {
\t                bars: { show: true, fill: true,  barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
\t                colors: ['#a88add'],
\t                series: { shadowSize: 3 },
\t                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
\t                yaxis:{ show: true, font: { color: '#ccc' }},
\t                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
\t                tooltip: true,
\t                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
\t              }
\t            \" style=\"height:188px\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Sales</h3>
                                <small>Calculated in last 7 days</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"text-center m-b\">
                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Market
                                        </label>
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Referral
                                        </label>
                                    </div>
                                </div>
                                <div ui-jp=\"plot\" ui-refresh=\"app.setting.color\" ui-options=\"
\t              [
\t                { data: [[3, 1], [2, 2], [6, 3], [5, 4], [7, 5]] }
\t              ],
\t              {
\t                bars: { horizontal: true, show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
\t                colors: ['#0cc2aa'],
\t                series: { shadowSize: 3 },
\t                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
\t                yaxis:{ show: true, font: { color: '#ccc' }},
\t                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
\t                tooltip: true,
\t                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
\t              }
\t            \" style=\"height:188px\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Open Projects <span class=\"label warning\">9</span></h3>
                                <small>Your data status</small>
                            </div>
                            <ul class=\"list inset\">
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 text-lg accent\">
\t\t\t            \tB
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>Broadcast web app mockup</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>5</strong> tasks, <strong>3</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 text-lg success\">
\t\t\t            \tG
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>GoodDesign Bootstrap 4 migration</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>35</strong> tasks, <strong>6</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 text-lg purple\">
\t\t\t            \t#
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>#Hashtag android app develop</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>52</strong> tasks, <strong>13</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 blue\">
\t\t\t            \t<i class=\"fa fa-lg fa-google\"></i>
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>Google material design application</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>15</strong> tasks, <strong>3</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 blue-800\">
\t\t\t            \t<i class=\"fa fa-lg fa-facebook\"></i>
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>Facebook connection web application</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>30</strong> tasks, <strong>5</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Stats</h3>
                                <small>Your data status</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th style=\"width:60px;\" class=\"text-center\">Graph</th>
                                    <th>Item</th>
                                    <th style=\"width:70px;\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'bar', height:19, barWidth:4, barSpacing:2, barColor:'#0cc2aa'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>App downloads</td>
                                    <td class=\"text-success\">
                                        <i class=\"fa fa-level-up\"></i> 40%
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-center\">
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 60,30,10 ], {type:'pie', height:19, sliceColors:['#fcc100','#fff','#0cc2aa']}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Social connection</td>
                                    <td class=\"text-success\">
                                        <i class=\"fa fa-level-up\"></i> 20%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'line', height:19, width:60, lineColor:'#0cc2aa', fillColor:'transparent'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Revenue</td>
                                    <td class=\"text-warning\">
                                        <i class=\"fa fa-level-down\"></i> 5%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'discrete', height:19, width:60, lineColor:'#6cc788'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Customer increase</td>
                                    <td class=\"text-danger\">
                                        <i class=\"fa fa-level-down\"></i> 20%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'line', height:19, width:60, lineColor:'#fcc100', fillColor:'#fcc100'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Order placed</td>
                                    <td class=\"text-warning\">
                                        <i class=\"fa fa-level-down\"></i> 5%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,16,15,16,14,17,18 ], {type:'line', height:19, width:60, lineColor:'#fcc100', fillColor:'transparent'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Visitors</td>
                                    <td class=\"text-warning\">
                                        <i class=\"fa fa-level-down\"></i> 8%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Members</h3>
                            </div>
                            <ul class=\"list no-border p-b\">
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                \t<span class=\"w-40 avatar\">
\t\t                  <img src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a4.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t                  <i class=\"on b-white bottom\"></i>
\t                    </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Chris Fox</a></div>
                                        <small class=\"text-muted text-ellipsis\">Designer, Blogger</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                  <span class=\"w-40 avatar\">
\t\t                  <img src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a5.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t                  <i class=\"on b-white bottom\"></i>
\t                  </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Mogen Polish</a></div>
                                        <small class=\"text-muted text-ellipsis\">Writter, Mag Editor</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                  <span class=\"w-40 avatar\">
\t\t                  <img src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a6.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t                  <i class=\"away b-white bottom\"></i>
\t                  </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Joge Lucky</a></div>
                                        <small class=\"text-muted text-ellipsis\">Art director, Movie Cut</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                  <span class=\"w-40 avatar\">
\t\t                  <img src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a7.jpg"), "html", null, true);
        echo "\" alt=\"...\">
\t\t                  <i class=\"busy b-white bottom\"></i>
\t                  </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Folisise Chosielie</a></div>
                                        <small class=\"text-muted text-ellipsis\">Musician, Player</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                \t<span class=\"w-40 avatar success\">
\t\t                  <span>P</span>
\t\t                  <i class=\"away b-white bottom\"></i>
\t\t                </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Peter</a></div>
                                        <small class=\"text-muted text-ellipsis\">Musician, Player</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Tasks</h3>
                                <small>20 finished, 5 remaining</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link text-muted p-x-xs\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-ellipsis-v\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>New task</a>
                                            <a class=\"dropdown-item\" href>Make all finished</a>
                                            <a class=\"dropdown-item\" href>Make all unfinished</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"streamline b-l m-l\">
                                    <div class=\"sl-item b-success\">
                                        <div class=\"sl-icon\">
                                            <i class=\"fa fa-check\"></i>
                                        </div>
                                        <div class=\"sl-content\">
                                            <div class=\"sl-date text-muted\">8:30</div>
                                            <div>Call to customer <a href class=\"text-info\">Jacob</a> and discuss the
                                                detail about the AP project.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item b-info\">
                                        <div class=\"sl-content\">
                                            <div class=\"sl-date text-muted\">Sat, 5 Mar</div>
                                            <div>Prepare for presentation</div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item b-warning\">
                                        <div class=\"sl-content\">
                                            <div class=\"sl-date text-muted\">Sun, 11 Feb</div>
                                            <div><a href class=\"text-info\">Jessi</a> assign you a task <a href
                                                                                                          class=\"text-info\">Mockup
                                                    Design</a>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"box-footer\">
                                <a href class=\"btn btn-sm warn text-u-c pull-right\">Add one</a>
                                <a href class=\"btn btn-sm white text-u-c\">More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <span class=\"label success pull-right\">5</span>
                                <h3>Activity</h3>
                                <small>10 members update their activies.</small>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"streamline b-l m-b m-l\">
                                    <div class=\"sl-item\">
                                        <div class=\"sl-left\">
                                            <img src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\">
                                        </div>
                                        <div class=\"sl-content\">
                                            <a href class=\"text-info\">Louis Elliott</a><span class=\"m-l-sm sl-date\">5 min ago</span>
                                            <div>assign you a task <a href class=\"text-info\">Mockup Design</a>.</div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item\">
                                        <div class=\"sl-left\">
                                            <img src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\">
                                        </div>
                                        <div class=\"sl-content\">
                                            <a href class=\"text-info\">Terry Moore</a><span class=\"m-l-sm sl-date\">10 min ago</span>
                                            <div>Follow up to close deal</div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item\">
                                        <div class=\"sl-left\">
                                            <img src=\"";
        // line 782
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/images/a8.jpg"), "html", null, true);
        echo "\" class=\"img-circle\">
                                        </div>
                                        <div class=\"sl-content\">
                                            <a href class=\"text-info\">Walter Paler</a><span class=\"m-l-sm sl-date\">1 hour ago</span>
                                            <div>was added to Repo</div>
                                        </div>
                                    </div>
                                </div>
                                <a href class=\"btn btn-sm white text-u-c m-y-xs\">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->

    <!-- theme switcher -->
    <div id=\"switcher\">
        <div class=\"switcher box-color dark-white text-color\" id=\"sw-theme\">
            <a href ui-toggle-class=\"active\" target=\"#sw-theme\" class=\"box-color dark-white text-color sw-btn\">
                <i class=\"fa fa-gear\"></i>
            </a>
            <div class=\"box-header\">
                <a href=\"https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull\"
                   class=\"btn btn-xs rounded danger pull-right\">BUY</a>
                <h2>Theme Switcher</h2>
            </div>
            <div class=\"box-divider\"></div>
            <div class=\"box-body\">
                <p class=\"hidden-md-down\">
                    <label class=\"md-check m-y-xs\" data-target=\"folded\">
                        <input type=\"checkbox\">
                        <i class=\"green\"></i>
                        <span class=\"hidden-folded\">Folded Aside</span>
                    </label>
                    <label class=\"md-check m-y-xs\" data-target=\"boxed\">
                        <input type=\"checkbox\">
                        <i class=\"green\"></i>
                        <span class=\"hidden-folded\">Boxed Layout</span>
                    </label>
                    <label class=\"m-y-xs pointer\" ui-fullscreen>
                        <span class=\"fa fa-expand fa-fw m-r-xs\"></span>
                        <span>Fullscreen Mode</span>
                    </label>
                </p>
                <p>Colors:</p>
                <p data-target=\"themeID\">
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'primary', accent:'accent', warn:'warn'}\">
                        <input type=\"radio\" name=\"color\" value=\"1\">
                        <i class=\"primary\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'accent', accent:'cyan', warn:'warn'}\">
                        <input type=\"radio\" name=\"color\" value=\"2\">
                        <i class=\"accent\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'warn', accent:'light-blue', warn:'warning'}\">
                        <input type=\"radio\" name=\"color\" value=\"3\">
                        <i class=\"warn\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'success', accent:'teal', warn:'lime'}\">
                        <input type=\"radio\" name=\"color\" value=\"4\">
                        <i class=\"success\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'info', accent:'light-blue', warn:'success'}\">
                        <input type=\"radio\" name=\"color\" value=\"5\">
                        <i class=\"info\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'blue', accent:'indigo', warn:'primary'}\">
                        <input type=\"radio\" name=\"color\" value=\"6\">
                        <i class=\"blue\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'warning', accent:'grey-100', warn:'success'}\">
                        <input type=\"radio\" name=\"color\" value=\"7\">
                        <i class=\"warning\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'danger', accent:'grey-100', warn:'grey-300'}\">
                        <input type=\"radio\" name=\"color\" value=\"8\">
                        <i class=\"danger\"></i>
                    </label>
                </p>
                <p>Themes:</p>
                <div data-target=\"bg\" class=\"text-u-c text-center _600 clearfix\">
                    <label class=\"p-a col-xs-6 light pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"\" hidden>
                        Light
                    </label>
                    <label class=\"p-a col-xs-6 grey pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"grey\" hidden>
                        Grey
                    </label>
                    <label class=\"p-a col-xs-6 dark pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"dark\" hidden>
                        Dark
                    </label>
                    <label class=\"p-a col-xs-6 black pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"black\" hidden>
                        Black
                    </label>
                </div>
            </div>
        </div>

        <div class=\"switcher box-color black lt\" id=\"sw-demo\">
            <a href ui-toggle-class=\"active\" target=\"#sw-demo\" class=\"box-color black lt text-color sw-btn\">
                <i class=\"fa fa-list text-white\"></i>
            </a>
            <div class=\"box-header\">
                <h2>Demos</h2>
            </div>
            <div class=\"box-divider\"></div>
            <div class=\"box-body\">
                <div class=\"text-u-c text-center _600 clearfix\">
                    <a href=\"dashboard.html\"
                       class=\"p-a col-xs-6 primary\">
                        <span class=\"text-white\">Default</span>
                    </a>
                    <a href=\"dashboard.0.html\"
                       class=\"p-a col-xs-6 success\">
                        <span class=\"text-white\">Zero</span>
                    </a>
                    <a href=\"dashboard.1.html\"
                       class=\"p-a col-xs-6 blue\">
                        <span class=\"text-white\">One</span>
                    </a>
                    <a href=\"dashboard.2.html\"
                       class=\"p-a col-xs-6 warn\">
                        <span class=\"text-white\">Two</span>
                    </a>
                    <a href=\"dashboard.3.html\"
                       class=\"p-a col-xs-6 danger\">
                        <span class=\"text-white\">Three</span>
                    </a>
                    <a href=\"dashboard.4.html\"
                       class=\"p-a col-xs-6 green\">
                        <span class=\"text-white\">Four</span>
                    </a>
                    <a href=\"dashboard.5.html\"
                       class=\"p-a col-xs-6 info\">
                        <span class=\"text-white\">Five</span>
                    </a>
                    <div
                            class=\"p-a col-xs-6 lter\">
                        <span class=\"text\">...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / -->

    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../libs/jquery/jquery/dist/jquery.js\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../libs/jquery/tether/dist/js/tether.min.js\"></script>
<script src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../libs/jquery/bootstrap/dist/js/bootstrap.js\"></script>
<!-- core -->
<script src=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../libs/jquery/underscore/underscore-min.js\"></script>
<script src=\"";
        // line 956
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js\"></script>
<script src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "../libs/jquery/PACE/pace.min.js\"></script>

<script src=\"scripts/config.lazyload.js\"></script>

<script src=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/palette.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 962
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-load.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-jp.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-include.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-device.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 966
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-nav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 968
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-screenfull.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 969
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-scroll-to.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 970
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/ui-toggle-class.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 972
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/app.js"), "html", null, true);
        echo "\"></script>

<!-- ajax -->
<script src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 976
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/scripts/jquery-pjax/jquery.pjax.js"), "html", null, true);
        echo "\"></script>
<!-- endbuild -->
</body>
</html>
";
        
        $__internal_7b89b7561b90d8ae09e6f72663ed684112f57cd7316ac847b1a1252867881618->leave($__internal_7b89b7561b90d8ae09e6f72663ed684112f57cd7316ac847b1a1252867881618_prof);

        
        $__internal_ea1cc0523e5de17225fcd0c9f5b0f2531c4593027138aaf9c47e5d93c1d8b5c5->leave($__internal_ea1cc0523e5de17225fcd0c9f5b0f2531c4593027138aaf9c47e5d93c1d8b5c5_prof);

    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1125 => 976,  1121 => 975,  1115 => 972,  1110 => 970,  1106 => 969,  1102 => 968,  1098 => 967,  1094 => 966,  1090 => 965,  1086 => 964,  1082 => 963,  1078 => 962,  1074 => 961,  1067 => 957,  1063 => 956,  1059 => 955,  1054 => 953,  1050 => 952,  1045 => 950,  874 => 782,  862 => 773,  850 => 764,  754 => 671,  739 => 659,  724 => 647,  709 => 635,  199 => 128,  180 => 112,  172 => 107,  141 => 79,  121 => 62,  101 => 45,  97 => 44,  80 => 30,  75 => 28,  70 => 26,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  46 => 17,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
    <meta name=\"description\" content=\"Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimal-ui\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-barstyle\" content=\"black-translucent\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('Assets/images/logo.png') }}\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Flatkit\">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <link rel=\"shortcut icon\" sizes=\"196x196\" href=\"{{ asset('Assets/images/logo.png') }}\">

    <!-- style -->
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/animate.css/animate.min.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/glyphicons/glyphicons.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/font-awesome/css/font-awesome.min.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/material-design-icons/material-design-icons.css') }}\"
          type=\"text/css\"/>

    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/bootstrap/dist/css/bootstrap.min.css') }}\" type=\"text/css\"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/styles/app.css') }}\" type=\"text/css\"/>
    <!-- endbuild -->
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/assets/styles/font.css') }}\" type=\"text/css\"/>
</head>
<body>
<div class=\"app\" id=\"app\">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <div id=\"aside\" class=\"app-aside modal fade nav-dropdown\">
        <!-- fluid app aside -->
        <div class=\"left navside dark dk\" layout=\"column\">
            <div class=\"navbar no-radius\">
                <!-- brand -->
                <a class=\"navbar-brand\">
                    <div ui-include=\"'{{ asset('Assets/images/logo.png') }}'\"></div>
                    <img src=\"{{ asset('Assets/images/logo.png') }}\" alt=\".\" class=\"hide\">
                    <span class=\"hidden-folded inline\">Flatkit</span>
                </a>
                <!-- / brand -->
            </div>
            <div flex class=\"hide-scroll\">
                <nav class=\"scroll nav-light\">

                    <ul class=\"nav\" ui-nav>
                        <li class=\"nav-header hidden-folded\">
                            <small class=\"text-muted\">Main</small>
                        </li>

                        <li>
                            <a href=\"dashboard.html\">
                    <span class=\"nav-icon\">
                      <i class=\"material-icons\">&#xe3fc;
                        <span ui-include=\"'{{ asset('Assets/images/i_0.svg') }}'\"></span>
                      </i>
                    </span>
                                <span class=\"nav-text\">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a>
                    <span class=\"nav-caret\">
                      <i class=\"fa fa-caret-down\"></i>
                    </span>
                                <span class=\"nav-label\">
                      <b class=\"label rounded label-sm primary\">5</b>
                    </span>
                                <span class=\"nav-icon\">
                      <i class=\"material-icons\">&#xe5c3;
                        <span ui-include=\"'{{ asset('Assets/images/i_1.svg') }}'\"></span>
                      </i>
                    </span>
                            </a></li></ul></nav></div>
        </div>
    </div>
    <!-- / -->

    <!-- content -->
    <div id=\"content\" class=\"app-content box-shadow-z0\" role=\"main\">
        <div class=\"app-header white box-shadow\">
            <div class=\"navbar\">
                <!-- Open side - Naviation on mobile -->
                <a data-toggle=\"modal\" data-target=\"#aside\" class=\"navbar-item pull-left hidden-lg-up\">
                    <i class=\"material-icons\">&#xe5d2;</i>
                </a>
                <!-- / -->

                <!-- Page title - Bind to \$state's title -->
                <div class=\"navbar-item pull-left h5\" ng-bind=\"\$state.current.data.title\" id=\"pageTitle\"></div>

                <!-- navbar right -->
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"nav-item dropdown pos-stc-xs\">
                        <a class=\"nav-link\" href data-toggle=\"dropdown\">
                            <i class=\"material-icons\">&#xe7f5;</i>
                            <span class=\"label label-sm up warn\">3</span>
                        </a>
                        <div ui-include=\"'{{ asset('Assets/scripts/palette.js') }}../views/blocks/dropdown.notification.html'\"></div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link clear\" href data-toggle=\"dropdown\">
                  <span class=\"avatar w-32\">
                    <img src=\"{{ asset('Assets/images/a0.jpg') }}\" alt=\"...\">
                    <i class=\"on b-white bottom\"></i>
                  </span>
                        </a>
                        <div ui-include=\"'../views/blocks/dropdown.user.html'\"></div>
                    </li>
                    <li class=\"nav-item hidden-md-up\">
                        <a class=\"nav-link\" data-toggle=\"collapse\" data-target=\"#collapse\">
                            <i class=\"material-icons\">&#xe5d4;</i>
                        </a>
                    </li>
                </ul>
                <!-- / navbar right -->

                <!-- navbar collapse -->
                <div class=\"collapse navbar-toggleable-sm\" id=\"collapse\">
                    <div ui-include=\"'{{ asset('Assets/scripts/palette.js') }}../views/blocks/navbar.form.right.html'\"></div>
                    <!-- link and dropdown -->
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href data-toggle=\"dropdown\">
                                <i class=\"fa fa-fw fa-plus text-muted\"></i>
                                <span>New</span>
                            </a>
                            <div ui-include=\"'../views/blocks/dropdown.new.html'\"></div>
                        </li>
                    </ul>
                    <!-- / -->
                </div>
                <!-- / navbar collapse -->
            </div>
        </div>
        <div class=\"app-footer\">
            <div class=\"p-a text-xs\">
                <div class=\"pull-right text-muted\">
                    &copy; Copyright <strong>Flatkit</strong> <span
                            class=\"hidden-xs-down\">- Built with Love v1.1.3</span>
                    <a ui-scroll-to=\"content\"><i class=\"fa fa-long-arrow-up p-x-sm\"></i></a>
                </div>
                <div class=\"nav\">
                    <a class=\"nav-link\" href=\"../\">About</a>
                    <span class=\"text-muted\">-</span>
                    <a class=\"nav-link label accent\" href=\"http://themeforest.net/user/flatfull/portfolio?ref=flatfull\">Get
                        it</a>
                </div>
            </div>
        </div>
        <div ui-view class=\"app-body\" id=\"view\">

            <!-- ############ PAGE START-->
            <div class=\"p-a white lt box-shadow\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h4 class=\"m-b-0 _300\">Welcome to Flatkit</h4>
                        <small class=\"text-muted\">Bootstrap <strong>4</strong> Web App Kit with AngularJS</small>
                    </div>
                    <div class=\"col-sm-6 text-sm-right\">
                        <div class=\"m-y-sm\">
                            <span class=\"m-r-sm\">Start manage:</span>
                            <div class=\"btn-group dropdown\">
                                <button class=\"btn white btn-sm \">Projects</button>
                                <button class=\"btn white btn-sm dropdown-toggle\" data-toggle=\"dropdown\"></button>
                                <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                    <a class=\"dropdown-item\" href>Members</a>
                                    <a class=\"dropdown-item\" href>Tasks</a>
                                    <a class=\"dropdown-item\" href>Inbox</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\">Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"padding\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"box p-a\">
                            <div class=\"pull-left m-r\">
\t            <span class=\"w-48 rounded  accent\">
\t              <i class=\"material-icons\">&#xe151;</i>
\t            </span>
                            </div>
                            <div class=\"clear\">
                                <h4 class=\"m-a-0 text-lg _300\"><a href>125 <span class=\"text-sm\">Emails</span></a></h4>
                                <small class=\"text-muted\">6 new arrivals.</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <div class=\"box p-a\">
                            <div class=\"pull-left m-r\">
\t            <span class=\"w-48 rounded primary\">
\t              <i class=\"material-icons\">&#xe54f;</i>
\t            </span>
                            </div>
                            <div class=\"clear\">
                                <h4 class=\"m-a-0 text-lg _300\"><a href>40 <span class=\"text-sm\">Projects</span></a></h4>
                                <small class=\"text-muted\">38 open.</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-4\">
                        <div class=\"box p-a\">
                            <div class=\"pull-left m-r\">
\t            <span class=\"w-48 rounded warn\">
\t              <i class=\"material-icons\">&#xe8d3;</i>
\t            </span>
                            </div>
                            <div class=\"clear\">
                                <h4 class=\"m-a-0 text-lg _300\"><a href>600 <span class=\"text-sm\">Users</span></a></h4>
                                <small class=\"text-muted\">632 vips.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Projects monitor</h3>
                                <small>Calculated in last 30 days</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"text-center m-b\">
                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-sm white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Month
                                        </label>
                                        <label class=\"btn btn-sm white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Day
                                        </label>
                                    </div>
                                </div>
                                <div ui-jp=\"plot\" ui-refresh=\"app.setting.color\" ui-options=\"
\t              [
\t                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]],
\t                  points: { show: true, radius: 0},
                  \t  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
\t                },
\t                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]],
\t                  points: { show: true, radius: 0},
                  \t  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
\t                },
\t                { data: [[1, 2], [2, 1.6], [3, 2.4], [4, 2.1], [5, 1.7], [6, 1.5], [7, 1.7]],
\t                  points: { show: true, radius: 0},
                  \t  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
\t                }
\t              ],
\t              {
\t                colors: ['#a88add','#0cc2aa','#fcc100'],
\t                series: { shadowSize: 3 },
\t                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
\t                yaxis:{ show: true, font: { color: '#ccc' }},
\t                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
\t                tooltip: true,
\t                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
\t              }
\t            \" style=\"height:188px\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Tasks</h3>
                                <small>Calculated in last 7 days</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"text-center m-b\">
                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> This Month
                                        </label>
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> This Week
                                        </label>
                                    </div>
                                </div>
                                <div ui-jp=\"plot\" ui-refresh=\"app.setting.color\" ui-options=\"
\t              [
\t                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] }
\t              ],
\t              {
\t                bars: { show: true, fill: true,  barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
\t                colors: ['#a88add'],
\t                series: { shadowSize: 3 },
\t                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
\t                yaxis:{ show: true, font: { color: '#ccc' }},
\t                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
\t                tooltip: true,
\t                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
\t              }
\t            \" style=\"height:188px\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Sales</h3>
                                <small>Calculated in last 7 days</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"text-center m-b\">
                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Market
                                        </label>
                                        <label class=\"btn btn-sm rounded white\">
                                            <input type=\"radio\" name=\"options\" autocomplete=\"off\"> Referral
                                        </label>
                                    </div>
                                </div>
                                <div ui-jp=\"plot\" ui-refresh=\"app.setting.color\" ui-options=\"
\t              [
\t                { data: [[3, 1], [2, 2], [6, 3], [5, 4], [7, 5]] }
\t              ],
\t              {
\t                bars: { horizontal: true, show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
\t                colors: ['#0cc2aa'],
\t                series: { shadowSize: 3 },
\t                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
\t                yaxis:{ show: true, font: { color: '#ccc' }},
\t                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
\t                tooltip: true,
\t                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
\t              }
\t            \" style=\"height:188px\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Open Projects <span class=\"label warning\">9</span></h3>
                                <small>Your data status</small>
                            </div>
                            <ul class=\"list inset\">
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 text-lg accent\">
\t\t\t            \tB
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>Broadcast web app mockup</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>5</strong> tasks, <strong>3</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 text-lg success\">
\t\t\t            \tG
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>GoodDesign Bootstrap 4 migration</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>35</strong> tasks, <strong>6</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 text-lg purple\">
\t\t\t            \t#
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>#Hashtag android app develop</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>52</strong> tasks, <strong>13</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 blue\">
\t\t\t            \t<i class=\"fa fa-lg fa-google\"></i>
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>Google material design application</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>15</strong> tasks, <strong>3</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t\t\t          \t<span class=\"w-40 r-2x _600 blue-800\">
\t\t\t            \t<i class=\"fa fa-lg fa-facebook\"></i>
                            </apan>
                                    </a>
                                    <div class=\"list-body\">
                                        <div class=\"m-y-sm pull-right\">
                                            <a href class=\"btn btn-xs white\">Manage</a>
                                            <a href class=\"btn btn-xs white btn-icon\"><i class=\"fa fa-pencil\"></i></a>
                                        </div>
                                        <div><a href>Facebook connection web application</a></div>
                                        <div class=\"text-sm\">
                                            <span class=\"text-muted\"><strong>30</strong> tasks, <strong>5</strong> issues</span>
                                            <span class=\"label\"></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Stats</h3>
                                <small>Your data status</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline\">
                                        <a class=\"nav-link\">
                                            <i class=\"material-icons md-18\">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link\" data-toggle=\"dropdown\">
                                            <i class=\"material-icons md-18\">&#xe5d4;</i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <a class=\"dropdown-item\" href>This month</a>
                                            <a class=\"dropdown-item\" href>This week</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th style=\"width:60px;\" class=\"text-center\">Graph</th>
                                    <th>Item</th>
                                    <th style=\"width:70px;\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'bar', height:19, barWidth:4, barSpacing:2, barColor:'#0cc2aa'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>App downloads</td>
                                    <td class=\"text-success\">
                                        <i class=\"fa fa-level-up\"></i> 40%
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-center\">
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 60,30,10 ], {type:'pie', height:19, sliceColors:['#fcc100','#fff','#0cc2aa']}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Social connection</td>
                                    <td class=\"text-success\">
                                        <i class=\"fa fa-level-up\"></i> 20%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'line', height:19, width:60, lineColor:'#0cc2aa', fillColor:'transparent'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Revenue</td>
                                    <td class=\"text-warning\">
                                        <i class=\"fa fa-level-down\"></i> 5%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'discrete', height:19, width:60, lineColor:'#6cc788'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Customer increase</td>
                                    <td class=\"text-danger\">
                                        <i class=\"fa fa-level-down\"></i> 20%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,14,17,18,16,15,16 ], {type:'line', height:19, width:60, lineColor:'#fcc100', fillColor:'#fcc100'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Order placed</td>
                                    <td class=\"text-warning\">
                                        <i class=\"fa fa-level-down\"></i> 5%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div ui-jp=\"sparkline\" ui-refresh=\"app.setting.color\"
                                             ui-options=\"[ 16,15,15,16,15,16,14,17,18 ], {type:'line', height:19, width:60, lineColor:'#fcc100', fillColor:'transparent'}\"
                                             class=\"sparkline inline\">loading...
                                        </div>
                                    </td>
                                    <td>Visitors</td>
                                    <td class=\"text-warning\">
                                        <i class=\"fa fa-level-down\"></i> 8%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Members</h3>
                            </div>
                            <ul class=\"list no-border p-b\">
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                \t<span class=\"w-40 avatar\">
\t\t                  <img src=\"{{ asset('Assets/images/a4.jpg') }}\" alt=\"...\">
\t\t                  <i class=\"on b-white bottom\"></i>
\t                    </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Chris Fox</a></div>
                                        <small class=\"text-muted text-ellipsis\">Designer, Blogger</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                  <span class=\"w-40 avatar\">
\t\t                  <img src=\"{{ asset('Assets/images/a5.jpg') }}\" alt=\"...\">
\t\t                  <i class=\"on b-white bottom\"></i>
\t                  </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Mogen Polish</a></div>
                                        <small class=\"text-muted text-ellipsis\">Writter, Mag Editor</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                  <span class=\"w-40 avatar\">
\t\t                  <img src=\"{{ asset('Assets/images/a6.jpg') }}\" alt=\"...\">
\t\t                  <i class=\"away b-white bottom\"></i>
\t                  </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Joge Lucky</a></div>
                                        <small class=\"text-muted text-ellipsis\">Art director, Movie Cut</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                  <span class=\"w-40 avatar\">
\t\t                  <img src=\"{{ asset('Assets/images/a7.jpg') }}\" alt=\"...\">
\t\t                  <i class=\"busy b-white bottom\"></i>
\t                  </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Folisise Chosielie</a></div>
                                        <small class=\"text-muted text-ellipsis\">Musician, Player</small>
                                    </div>
                                </li>
                                <li class=\"list-item\">
                                    <a herf class=\"list-left\">
\t                \t<span class=\"w-40 avatar success\">
\t\t                  <span>P</span>
\t\t                  <i class=\"away b-white bottom\"></i>
\t\t                </span>
                                    </a>
                                    <div class=\"list-body\">
                                        <div><a href>Peter</a></div>
                                        <small class=\"text-muted text-ellipsis\">Musician, Player</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3>Tasks</h3>
                                <small>20 finished, 5 remaining</small>
                            </div>
                            <div class=\"box-tool\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item inline dropdown\">
                                        <a class=\"nav-link text-muted p-x-xs\" data-toggle=\"dropdown\">
                                            <i class=\"fa fa-ellipsis-v\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-scale pull-right\">
                                            <a class=\"dropdown-item\" href>New task</a>
                                            <a class=\"dropdown-item\" href>Make all finished</a>
                                            <a class=\"dropdown-item\" href>Make all unfinished</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\">Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"streamline b-l m-l\">
                                    <div class=\"sl-item b-success\">
                                        <div class=\"sl-icon\">
                                            <i class=\"fa fa-check\"></i>
                                        </div>
                                        <div class=\"sl-content\">
                                            <div class=\"sl-date text-muted\">8:30</div>
                                            <div>Call to customer <a href class=\"text-info\">Jacob</a> and discuss the
                                                detail about the AP project.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item b-info\">
                                        <div class=\"sl-content\">
                                            <div class=\"sl-date text-muted\">Sat, 5 Mar</div>
                                            <div>Prepare for presentation</div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item b-warning\">
                                        <div class=\"sl-content\">
                                            <div class=\"sl-date text-muted\">Sun, 11 Feb</div>
                                            <div><a href class=\"text-info\">Jessi</a> assign you a task <a href
                                                                                                          class=\"text-info\">Mockup
                                                    Design</a>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"box-footer\">
                                <a href class=\"btn btn-sm warn text-u-c pull-right\">Add one</a>
                                <a href class=\"btn btn-sm white text-u-c\">More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-4\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <span class=\"label success pull-right\">5</span>
                                <h3>Activity</h3>
                                <small>10 members update their activies.</small>
                            </div>
                            <div class=\"box-body\">
                                <div class=\"streamline b-l m-b m-l\">
                                    <div class=\"sl-item\">
                                        <div class=\"sl-left\">
                                            <img src=\"{{ asset('Assets/images/a2.jpg') }}\" class=\"img-circle\">
                                        </div>
                                        <div class=\"sl-content\">
                                            <a href class=\"text-info\">Louis Elliott</a><span class=\"m-l-sm sl-date\">5 min ago</span>
                                            <div>assign you a task <a href class=\"text-info\">Mockup Design</a>.</div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item\">
                                        <div class=\"sl-left\">
                                            <img src=\"{{ asset('Assets/images/a5.jpg') }}\" class=\"img-circle\">
                                        </div>
                                        <div class=\"sl-content\">
                                            <a href class=\"text-info\">Terry Moore</a><span class=\"m-l-sm sl-date\">10 min ago</span>
                                            <div>Follow up to close deal</div>
                                        </div>
                                    </div>
                                    <div class=\"sl-item\">
                                        <div class=\"sl-left\">
                                            <img src=\"{{ asset('Assets/images/a8.jpg') }}\" class=\"img-circle\">
                                        </div>
                                        <div class=\"sl-content\">
                                            <a href class=\"text-info\">Walter Paler</a><span class=\"m-l-sm sl-date\">1 hour ago</span>
                                            <div>was added to Repo</div>
                                        </div>
                                    </div>
                                </div>
                                <a href class=\"btn btn-sm white text-u-c m-y-xs\">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->

    <!-- theme switcher -->
    <div id=\"switcher\">
        <div class=\"switcher box-color dark-white text-color\" id=\"sw-theme\">
            <a href ui-toggle-class=\"active\" target=\"#sw-theme\" class=\"box-color dark-white text-color sw-btn\">
                <i class=\"fa fa-gear\"></i>
            </a>
            <div class=\"box-header\">
                <a href=\"https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull\"
                   class=\"btn btn-xs rounded danger pull-right\">BUY</a>
                <h2>Theme Switcher</h2>
            </div>
            <div class=\"box-divider\"></div>
            <div class=\"box-body\">
                <p class=\"hidden-md-down\">
                    <label class=\"md-check m-y-xs\" data-target=\"folded\">
                        <input type=\"checkbox\">
                        <i class=\"green\"></i>
                        <span class=\"hidden-folded\">Folded Aside</span>
                    </label>
                    <label class=\"md-check m-y-xs\" data-target=\"boxed\">
                        <input type=\"checkbox\">
                        <i class=\"green\"></i>
                        <span class=\"hidden-folded\">Boxed Layout</span>
                    </label>
                    <label class=\"m-y-xs pointer\" ui-fullscreen>
                        <span class=\"fa fa-expand fa-fw m-r-xs\"></span>
                        <span>Fullscreen Mode</span>
                    </label>
                </p>
                <p>Colors:</p>
                <p data-target=\"themeID\">
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'primary', accent:'accent', warn:'warn'}\">
                        <input type=\"radio\" name=\"color\" value=\"1\">
                        <i class=\"primary\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'accent', accent:'cyan', warn:'warn'}\">
                        <input type=\"radio\" name=\"color\" value=\"2\">
                        <i class=\"accent\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'warn', accent:'light-blue', warn:'warning'}\">
                        <input type=\"radio\" name=\"color\" value=\"3\">
                        <i class=\"warn\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'success', accent:'teal', warn:'lime'}\">
                        <input type=\"radio\" name=\"color\" value=\"4\">
                        <i class=\"success\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'info', accent:'light-blue', warn:'success'}\">
                        <input type=\"radio\" name=\"color\" value=\"5\">
                        <i class=\"info\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'blue', accent:'indigo', warn:'primary'}\">
                        <input type=\"radio\" name=\"color\" value=\"6\">
                        <i class=\"blue\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'warning', accent:'grey-100', warn:'success'}\">
                        <input type=\"radio\" name=\"color\" value=\"7\">
                        <i class=\"warning\"></i>
                    </label>
                    <label class=\"radio radio-inline m-a-0 ui-check ui-check-color ui-check-md\"
                           data-value=\"{primary:'danger', accent:'grey-100', warn:'grey-300'}\">
                        <input type=\"radio\" name=\"color\" value=\"8\">
                        <i class=\"danger\"></i>
                    </label>
                </p>
                <p>Themes:</p>
                <div data-target=\"bg\" class=\"text-u-c text-center _600 clearfix\">
                    <label class=\"p-a col-xs-6 light pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"\" hidden>
                        Light
                    </label>
                    <label class=\"p-a col-xs-6 grey pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"grey\" hidden>
                        Grey
                    </label>
                    <label class=\"p-a col-xs-6 dark pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"dark\" hidden>
                        Dark
                    </label>
                    <label class=\"p-a col-xs-6 black pointer m-a-0\">
                        <input type=\"radio\" name=\"theme\" value=\"black\" hidden>
                        Black
                    </label>
                </div>
            </div>
        </div>

        <div class=\"switcher box-color black lt\" id=\"sw-demo\">
            <a href ui-toggle-class=\"active\" target=\"#sw-demo\" class=\"box-color black lt text-color sw-btn\">
                <i class=\"fa fa-list text-white\"></i>
            </a>
            <div class=\"box-header\">
                <h2>Demos</h2>
            </div>
            <div class=\"box-divider\"></div>
            <div class=\"box-body\">
                <div class=\"text-u-c text-center _600 clearfix\">
                    <a href=\"dashboard.html\"
                       class=\"p-a col-xs-6 primary\">
                        <span class=\"text-white\">Default</span>
                    </a>
                    <a href=\"dashboard.0.html\"
                       class=\"p-a col-xs-6 success\">
                        <span class=\"text-white\">Zero</span>
                    </a>
                    <a href=\"dashboard.1.html\"
                       class=\"p-a col-xs-6 blue\">
                        <span class=\"text-white\">One</span>
                    </a>
                    <a href=\"dashboard.2.html\"
                       class=\"p-a col-xs-6 warn\">
                        <span class=\"text-white\">Two</span>
                    </a>
                    <a href=\"dashboard.3.html\"
                       class=\"p-a col-xs-6 danger\">
                        <span class=\"text-white\">Three</span>
                    </a>
                    <a href=\"dashboard.4.html\"
                       class=\"p-a col-xs-6 green\">
                        <span class=\"text-white\">Four</span>
                    </a>
                    <a href=\"dashboard.5.html\"
                       class=\"p-a col-xs-6 info\">
                        <span class=\"text-white\">Five</span>
                    </a>
                    <div
                            class=\"p-a col-xs-6 lter\">
                        <span class=\"text\">...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / -->

    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src=\"{{ asset('Assets/scripts/palette.js') }}../libs/jquery/jquery/dist/jquery.js\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('Assets/scripts/palette.js') }}../libs/jquery/tether/dist/js/tether.min.js\"></script>
<script src=\"{{ asset('Assets/scripts/palette.js') }}../libs/jquery/bootstrap/dist/js/bootstrap.js\"></script>
<!-- core -->
<script src=\"{{ asset('Assets/scripts/palette.js') }}../libs/jquery/underscore/underscore-min.js\"></script>
<script src=\"{{ asset('Assets/scripts/palette.js') }}../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js\"></script>
<script src=\"{{ asset('Assets/scripts/palette.js') }}../libs/jquery/PACE/pace.min.js\"></script>

<script src=\"scripts/config.lazyload.js\"></script>

<script src=\"{{ asset('Assets/scripts/palette.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-load.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-jp.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-include.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-device.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-form.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-nav.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-screenfull.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-scroll-to.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/ui-toggle-class.js') }}\"></script>

<script src=\"{{ asset('Assets/scripts/app.js') }}\"></script>

<!-- ajax -->
<script src=\"{{ asset('Assets/scripts/app.js') }}\"></script>
<script src=\"{{ asset('Assets/scripts/jquery-pjax/jquery.pjax.js') }}\"></script>
<!-- endbuild -->
</body>
</html>
", "dashboard.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevweb\\app\\Resources\\views\\dashboard.html.twig");
    }
}