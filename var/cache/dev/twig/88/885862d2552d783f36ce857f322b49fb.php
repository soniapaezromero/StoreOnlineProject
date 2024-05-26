<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pedido/edit.html.twig */
class __TwigTemplate_e089da81d16d1a7b75b9fd090a24065e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedido/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Pedidos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 7
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            yield "    ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
            yield "
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
        ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "order", [], "any", false, false, false, 19), 'widget');
            yield "
        ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "total", [], "any", false, false, false, 20), 'widget');
            yield "
        ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "estado", [], "any", false, false, false, 21), 'widget');
            yield "
    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "save", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
            yield "
    <a  class=\"btn btn-info w-25\" href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            yield "\">back to list</a>
    </div>di
    ";
            // line 25
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
            yield "
    ";
        } else {
            // line 27
            yield "    ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
            yield "
    <form  id=\"formElem\" name=\"formElem\" method=\"post\" href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_edit", ["id" => "x"]);
            yield "\"action=\"\" >
        <div class=\"container\" style=\"background: navajowhite;border: 0;\">

            <h1>Edit Pedido</h1>
            <p></p>
            <label><h2>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 33, $this->source); })()), "referencia", [], "any", false, false, false, 33), "html", null, true);
            yield "</h2></label>
            <p></p>
            <p></p>
            <label><h4>Cliente</h4></label>
            <p></p>
            <label><h5>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 38, $this->source); })()), "clientePedido", [], "any", false, false, false, 38), "html", null, true);
            yield "</h5></label>
            <p></p>

            <div class=\"form-group\">
                <h4 style=\"text-align: center;\">Productos</h4>
                <label for=\"itemspedido\">
                <table  name=\"itemspedido\"id=\"itemspedido\" class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                    <thead>
                    <tr>
                        <th style=\"width: 5%;\">Producto</th>
                        <th>Imagen</th>
                        <th>Precio €</th>
                        <th>Cantidad</th>
                        <th>Total €</th>
                    </tr>
                    </thead>
                    <tbody name=\"items[]\">
                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productPedido"]) || array_key_exists("productPedido", $context) ? $context["productPedido"] : (function () { throw new RuntimeError('Variable "productPedido" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 56
                yield "                        <tr>
                            <td><input name='itemm_oldname[]' value=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57), "html", null, true);
                yield "\"></td>
                            <td><img height=\"50\" src=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageName", [], "any", false, false, false, 58), "html", null, true);
                yield "\"></td>
                            <td><input name='itemm_oldnprecio[]' value=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, false, 59), "html", null, true);
                yield "\" style=\"width: 100%;text-align: right\"></td>
                            <td><input name='itemm_oldcant[]' value=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cantidadProducto", [], "any", false, false, false, 60), "html", null, true);
                yield "\"style=\"width: 100%;text-align: right\"></td>
                            <td><input name='itemm_oldctotal[]' id=\"itemm_oldctotal[]\" value=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "precio", [], "any", false, false, false, 61)) * $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cantidadProducto", [], "any", false, false, false, 61))), "html", null, true);
                yield "\"style=\"width: 100%;text-align: right\"></td>
                            <td><a class='btn btn-primary'id='btquit' onclick=\"quitItem(this)\" style='color: #dfdfdf '>Eliminar</a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                    </tbody>
                </table>
                </label>
                <p></p>
                <p></p>
                <label for=\"totalold\" >
                    TOTAL  <input id=\"totalold\" name=\"totalold\" type=\"text\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 71, $this->source); })()), "total", [], "any", false, false, false, 71), "html", null, true);
            yield "€\"style=\"text-align: right\" >
                </label>
            <p></p>
            <label><h4> Añadir Productos </h4></label>
            <p></p>
            <p></p>
            <p></p>
                <div class=\"form-group\">
                    <label>
                        <label for=\"product\" align=\"left\">Productos</label>
                        <p></p>
                        <select for=\"product\" id=\"produc\" name=\"produc\"  data-variable=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 82, $this->source); })()), "|"), "html", null, true);
            yield "\" onchange=\"mostrarprecio()\" >
                            <option value=\"selecciona\">Selecciona un producto</option>
                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 85
                yield "                                <option  name=\"opc\" id=\"opc\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "name", [], "any", false, false, false, 85), "html", null, true);
                yield ";";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imageName", [], "any", false, false, false, 85), "html", null, true);
                yield ";";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 85), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "name", [], "any", false, false, false, 85), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                        </select>
                    </label>
                    <label>
                        <label for=\"imagen\">Imagen</label>
                        <p></p>
                        <img id=\"imagen\"  height=\"50\"src=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/vacío-50.png"), "html", null, true);
            yield "\">
                    </label>
                    <label >
                        <label for=\"precio\">Precio  €</label>
                        <p></p>
                        <input   type=\"text\" id=\"precio\" value=\"0€\" />
                    </label>
                    <label >
                        <label for=\"cant\">Cantidad</label>
                        <p></p>
                        <input name=\"cant\" id=\"cant\" type=\"number\"  min=\"0\" max=\"10\"  value=\"0\" onchange=\"multi()\"/>
                    </label>
                    <label >
                        <label for=\"Coste\">Total</label>
                        <p></p>
                        <input type=\"text\"  id=\"Coste\" name=\"Coste\" value=\"0€\" >
                    </label>
                <p></p>
                <a class=\"btn btn-primary\" id=\"btn-add\" onclick=\"add()\" style=\"color: #dfdfdf\">Añadir</a>
                <div class=\"form-group\">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                    <label >
                        <label for=\"productostabla\">
                        <table  name=\"productostabla\" id=\"productostabla\" class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\"   valo>
                    <thead>
                    <tr>
                        <th>Imagen</th>
                        <th style=\"width: 5%;\">Producto</th>
                        <th>Precio €</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody name=\"procustosd[]\" id=\"body\" onchange=\"total()\">
                    </tbody>
                </table>
                        </label>
                    </label>
                <p></p>
                <p></p>
                <p></p>
                <label>
                 <label for=\"totalnew\" >
                    TOTAL  <input  name=\"totalnew\" id=\"totalnew\" type=\"text\" style=\"text-align: right\" value=\"0\">
                 </label>
                </label>
                </div>
                <p></p>
                <p></p>
                    ";
            // line 146
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "save", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
            yield "
                    <a class=\"btn btn-info w-25\" href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedidocliente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\">back to list</a>
                    ";
        }
        // line 149
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_end');
        yield "
                ";
        // line 150
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pedido/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </form>

    </div>
    ";
        // line 157
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 158
        yield "        <script>

            function mostrarprecio() {
                var select = document.getElementById(\"produc\").getAttribute(\"data-variable\");
                var arrayprod = select.split('|');
                var product=document.getElementById(\"produc\").value;
                arrayprod.forEach((prod) => {
                    var datprod=product.split(';');
                    var name=datprod[0];
                    var img=datprod[1];
                    if(prod.includes(name)) {
                        var price=datprod[2];
                        document.getElementById(\"precio\").value = price;
                        image=document.getElementById(\"imagen\");
                        image.setAttribute('src',img);
                    }
                });


            }
            function multi() {
                m1 = document.getElementById(\"precio\").value;
                m2 = document.getElementById(\"cant\").value;
                r = m1 * m2;
                coste = document.getElementById(\"Coste\").value = r+\"€\";
            }
            var totprice=[];

            function add(){
                var table=document.getElementById(\"body\");
                var product=document.getElementById(\"produc\").value;
                var prod=product.split(';');
                var name=prod[0];
                var vacio=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/vacío-50.png"), "html", null, true);
        yield "\";
                var img=document.getElementById(\"imagen\").getAttribute('src');
                var price=document.getElementById(\"precio\").value;
                var cant=document.getElementById(\"cant\").value;
                var totalprod=document.getElementById(\"Coste\").value;
                var old=document.getElementById(\"totalold\").value;
                totalold = old.replace(/[^0-9]+/g, \"\");
                var fila=\"<tr><td><img src=\"+img+\" height=\"+50+\"> </td><td><input name='prod_nameadd[]' value='\"+name+\"'></td><td><input name='prod_precioadd[]' value='\"+price+\"'style='width: 100%;text-align: right' ></td><td><input name='prod_cantadd[]' value='\"+cant+\"'style='width: 100%;text-align: right'></td><td><input name='prod_totaladd[]' value='\"+totalprod+\"'></td><td> <a class='btn btn-primary'id='btquit' onclick='quit(this)' style='color: #dfdfdf '>Eliminar</a></td></tr>\";
                var btn = document.createElement(\"tr\");
                btn.innerHTML=fila;
                document.getElementById(\"body\").appendChild(btn);
                let precios = document.querySelectorAll(
                    \"table  tr > td:nth-child(5)\"
                );

                precios.forEach((pp)=>{
                    pru=pp.innerHTML;
                    num=pru.replace(/[^0-9]+/g, \"\");
                    precio=parseInt(num);
                });
                totprice.push(precio);
                let totnew = totprice.reduce((a, b) => a + b, 0);
                var totord=parseInt(totalold)+totnew;

                document.getElementById(\"totalnew\").value = totord;
                document.getElementById(\"precio\").value=\"0€\"
                document.getElementById(\"cant\").value = \"0\";
                document.getElementById(\"Coste\").value = \"0€\";
                document.getElementById(\"produc\").selectedIndex = 0;
                document.getElementById(\"imagen\").setAttribute('src',vacio);


            }

            function quit(Id){;
                var quitTotal=[];
                let row = Id.parentNode.parentNode;
                let tab = document.getElementById(\"productostabla\");
                tab.deleteRow(row.rowIndex);
                let precios = document.getElementsByName(\"prod_totaladd[]\");

                precios.forEach((pp)=>{
                    pru=pp.value;
                    console.log(pru);
                    num=pru.replace(/[^0-9]+/g, \"\");
                    precio=parseInt(num);
                    quitTotal.push(precio);

                });
                var old=document.getElementById(\"totalold\").value;
                totalold = old.replace(/[^0-9]+/g, \"\");
                let totnew = quitTotal.reduce((a, b) => a + b, 0);

                var totord = parseInt(totalold) + totnew
                document.getElementById(\"totalnew\").value = totord +\"€\";
               quitTotal.length=0;
            }
            var itemTotal=[];
            function quitItem(Id) {
                let row = Id.parentNode.parentNode;
                let tabl = document.getElementById(\"itemspedido\");
                tabl.deleteRow(row.rowIndex);
                let prices =document.getElementsByName(\"itemm_oldctotal[]\");

                prices.forEach((pr)=>{

                    pvu=pr.value;
                    number=pvu.replace(/[^0-9]+/g, \"\");
                    pric=parseInt(number);
                    itemTotal.push(pric);
                });

                totalItem=itemTotal.reduce((a, b) => a + b, 0);
               console.log(totalItem);
                document.getElementById(\"totalold\").value = totalItem +\"€\";
                itemTotal.length=0;
            }

        </script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pedido/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  424 => 191,  389 => 158,  369 => 157,  359 => 150,  354 => 149,  349 => 147,  345 => 146,  288 => 92,  281 => 87,  265 => 85,  261 => 84,  256 => 82,  242 => 71,  234 => 65,  224 => 61,  220 => 60,  216 => 59,  211 => 58,  207 => 57,  204 => 56,  200 => 55,  180 => 38,  172 => 33,  164 => 28,  159 => 27,  154 => 25,  149 => 23,  145 => 22,  141 => 21,  137 => 20,  133 => 19,  127 => 17,  124 => 16,  118 => 15,  106 => 9,  101 => 8,  96 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos{% endblock %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        {% endfor %}
    {% endfor %}
    {% if is_granted('ROLE_ADMIN') %}
    {{ form_start(form) }}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
        {{ form_widget(form.order) }}
        {{ form_widget(form.total) }}
        {{ form_widget(form.estado) }}
    {{ form_widget(form.save, {'attr': {'class': 'btn btn-info w-25'}}) }}
    <a  class=\"btn btn-info w-25\" href=\"{{ path('app_pedido_index') }}\">back to list</a>
    </div>di
    {{ form_end(form) }}
    {% else %}
    {{ form_start(form) }}
    <form  id=\"formElem\" name=\"formElem\" method=\"post\" href=\"{{ path('app_pedido_edit', {'id': 'x'}) }}\"action=\"\" >
        <div class=\"container\" style=\"background: navajowhite;border: 0;\">

            <h1>Edit Pedido</h1>
            <p></p>
            <label><h2>{{ pedido.referencia }}</h2></label>
            <p></p>
            <p></p>
            <label><h4>Cliente</h4></label>
            <p></p>
            <label><h5>{{ pedido.clientePedido }}</h5></label>
            <p></p>

            <div class=\"form-group\">
                <h4 style=\"text-align: center;\">Productos</h4>
                <label for=\"itemspedido\">
                <table  name=\"itemspedido\"id=\"itemspedido\" class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                    <thead>
                    <tr>
                        <th style=\"width: 5%;\">Producto</th>
                        <th>Imagen</th>
                        <th>Precio €</th>
                        <th>Cantidad</th>
                        <th>Total €</th>
                    </tr>
                    </thead>
                    <tbody name=\"items[]\">
                    {% for product in productPedido %}
                        <tr>
                            <td><input name='itemm_oldname[]' value=\"{{product.name }}\"></td>
                            <td><img height=\"50\" src=\"{{ asset('images/products/') }}{{ product.imageName }}\"></td>
                            <td><input name='itemm_oldnprecio[]' value=\"{{ product.precio }}\" style=\"width: 100%;text-align: right\"></td>
                            <td><input name='itemm_oldcant[]' value=\"{{ product.cantidadProducto }}\"style=\"width: 100%;text-align: right\"></td>
                            <td><input name='itemm_oldctotal[]' id=\"itemm_oldctotal[]\" value=\"{{  product.precio|number_format* product.cantidadProducto|number_format  }}\"style=\"width: 100%;text-align: right\"></td>
                            <td><a class='btn btn-primary'id='btquit' onclick=\"quitItem(this)\" style='color: #dfdfdf '>Eliminar</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                </label>
                <p></p>
                <p></p>
                <label for=\"totalold\" >
                    TOTAL  <input id=\"totalold\" name=\"totalold\" type=\"text\" value=\"{{ pedido.total }}€\"style=\"text-align: right\" >
                </label>
            <p></p>
            <label><h4> Añadir Productos </h4></label>
            <p></p>
            <p></p>
            <p></p>
                <div class=\"form-group\">
                    <label>
                        <label for=\"product\" align=\"left\">Productos</label>
                        <p></p>
                        <select for=\"product\" id=\"produc\" name=\"produc\"  data-variable=\"{{ productos |join(\"|\") }}\" onchange=\"mostrarprecio()\" >
                            <option value=\"selecciona\">Selecciona un producto</option>
                            {% for producto in productos %}
                                <option  name=\"opc\" id=\"opc\" value=\"{{producto.name }};{{ asset('images/products/') }}{{ producto.imageName }};{{ producto.precio}} \">{{producto.name }}</option>
                            {% endfor %}
                        </select>
                    </label>
                    <label>
                        <label for=\"imagen\">Imagen</label>
                        <p></p>
                        <img id=\"imagen\"  height=\"50\"src=\"{{ asset('images/products/vacío-50.png') }}\">
                    </label>
                    <label >
                        <label for=\"precio\">Precio  €</label>
                        <p></p>
                        <input   type=\"text\" id=\"precio\" value=\"0€\" />
                    </label>
                    <label >
                        <label for=\"cant\">Cantidad</label>
                        <p></p>
                        <input name=\"cant\" id=\"cant\" type=\"number\"  min=\"0\" max=\"10\"  value=\"0\" onchange=\"multi()\"/>
                    </label>
                    <label >
                        <label for=\"Coste\">Total</label>
                        <p></p>
                        <input type=\"text\"  id=\"Coste\" name=\"Coste\" value=\"0€\" >
                    </label>
                <p></p>
                <a class=\"btn btn-primary\" id=\"btn-add\" onclick=\"add()\" style=\"color: #dfdfdf\">Añadir</a>
                <div class=\"form-group\">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                    <label >
                        <label for=\"productostabla\">
                        <table  name=\"productostabla\" id=\"productostabla\" class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\"   valo>
                    <thead>
                    <tr>
                        <th>Imagen</th>
                        <th style=\"width: 5%;\">Producto</th>
                        <th>Precio €</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody name=\"procustosd[]\" id=\"body\" onchange=\"total()\">
                    </tbody>
                </table>
                        </label>
                    </label>
                <p></p>
                <p></p>
                <p></p>
                <label>
                 <label for=\"totalnew\" >
                    TOTAL  <input  name=\"totalnew\" id=\"totalnew\" type=\"text\" style=\"text-align: right\" value=\"0\">
                 </label>
                </label>
                </div>
                <p></p>
                <p></p>
                    {{ form_widget(form.save, {'attr': {'class': 'btn btn-info w-25'}}) }}
                    <a class=\"btn btn-info w-25\" href=\"{{ path('app_pedidocliente_show',{'id': cliente.id}) }}\">back to list</a>
                    {% endif %}
                    {{ form_end(form) }}
                {{ include('pedido/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </form>

    </div>
    {% block javascripts %}
        <script>

            function mostrarprecio() {
                var select = document.getElementById(\"produc\").getAttribute(\"data-variable\");
                var arrayprod = select.split('|');
                var product=document.getElementById(\"produc\").value;
                arrayprod.forEach((prod) => {
                    var datprod=product.split(';');
                    var name=datprod[0];
                    var img=datprod[1];
                    if(prod.includes(name)) {
                        var price=datprod[2];
                        document.getElementById(\"precio\").value = price;
                        image=document.getElementById(\"imagen\");
                        image.setAttribute('src',img);
                    }
                });


            }
            function multi() {
                m1 = document.getElementById(\"precio\").value;
                m2 = document.getElementById(\"cant\").value;
                r = m1 * m2;
                coste = document.getElementById(\"Coste\").value = r+\"€\";
            }
            var totprice=[];

            function add(){
                var table=document.getElementById(\"body\");
                var product=document.getElementById(\"produc\").value;
                var prod=product.split(';');
                var name=prod[0];
                var vacio=\"{{ asset('images/products/vacío-50.png')}}\";
                var img=document.getElementById(\"imagen\").getAttribute('src');
                var price=document.getElementById(\"precio\").value;
                var cant=document.getElementById(\"cant\").value;
                var totalprod=document.getElementById(\"Coste\").value;
                var old=document.getElementById(\"totalold\").value;
                totalold = old.replace(/[^0-9]+/g, \"\");
                var fila=\"<tr><td><img src=\"+img+\" height=\"+50+\"> </td><td><input name='prod_nameadd[]' value='\"+name+\"'></td><td><input name='prod_precioadd[]' value='\"+price+\"'style='width: 100%;text-align: right' ></td><td><input name='prod_cantadd[]' value='\"+cant+\"'style='width: 100%;text-align: right'></td><td><input name='prod_totaladd[]' value='\"+totalprod+\"'></td><td> <a class='btn btn-primary'id='btquit' onclick='quit(this)' style='color: #dfdfdf '>Eliminar</a></td></tr>\";
                var btn = document.createElement(\"tr\");
                btn.innerHTML=fila;
                document.getElementById(\"body\").appendChild(btn);
                let precios = document.querySelectorAll(
                    \"table  tr > td:nth-child(5)\"
                );

                precios.forEach((pp)=>{
                    pru=pp.innerHTML;
                    num=pru.replace(/[^0-9]+/g, \"\");
                    precio=parseInt(num);
                });
                totprice.push(precio);
                let totnew = totprice.reduce((a, b) => a + b, 0);
                var totord=parseInt(totalold)+totnew;

                document.getElementById(\"totalnew\").value = totord;
                document.getElementById(\"precio\").value=\"0€\"
                document.getElementById(\"cant\").value = \"0\";
                document.getElementById(\"Coste\").value = \"0€\";
                document.getElementById(\"produc\").selectedIndex = 0;
                document.getElementById(\"imagen\").setAttribute('src',vacio);


            }

            function quit(Id){;
                var quitTotal=[];
                let row = Id.parentNode.parentNode;
                let tab = document.getElementById(\"productostabla\");
                tab.deleteRow(row.rowIndex);
                let precios = document.getElementsByName(\"prod_totaladd[]\");

                precios.forEach((pp)=>{
                    pru=pp.value;
                    console.log(pru);
                    num=pru.replace(/[^0-9]+/g, \"\");
                    precio=parseInt(num);
                    quitTotal.push(precio);

                });
                var old=document.getElementById(\"totalold\").value;
                totalold = old.replace(/[^0-9]+/g, \"\");
                let totnew = quitTotal.reduce((a, b) => a + b, 0);

                var totord = parseInt(totalold) + totnew
                document.getElementById(\"totalnew\").value = totord +\"€\";
               quitTotal.length=0;
            }
            var itemTotal=[];
            function quitItem(Id) {
                let row = Id.parentNode.parentNode;
                let tabl = document.getElementById(\"itemspedido\");
                tabl.deleteRow(row.rowIndex);
                let prices =document.getElementsByName(\"itemm_oldctotal[]\");

                prices.forEach((pr)=>{

                    pvu=pr.value;
                    number=pvu.replace(/[^0-9]+/g, \"\");
                    pric=parseInt(number);
                    itemTotal.push(pric);
                });

                totalItem=itemTotal.reduce((a, b) => a + b, 0);
               console.log(totalItem);
                document.getElementById(\"totalold\").value = totalItem +\"€\";
                itemTotal.length=0;
            }

        </script>

    {% endblock %}
{% endblock %}
", "pedido/edit.html.twig", "C:\\xampp\\htdocs\\StoreOnlineProject-master\\templates\\pedido\\edit.html.twig");
    }
}
