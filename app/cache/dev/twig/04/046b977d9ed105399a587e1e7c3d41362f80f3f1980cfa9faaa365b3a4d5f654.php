<?php

/* SalesBundle:invoice:show_pdf.html.twig */
class __TwigTemplate_0bda993964c56c95a2c5f45d14e5b9d7a4e712af7b26370fb8baf903b9320554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a9af2953e4ffef115a6cc68dba94a101139fbc11fa40f634250edeff9be39ce = $this->env->getExtension("native_profiler");
        $__internal_3a9af2953e4ffef115a6cc68dba94a101139fbc11fa40f634250edeff9be39ce->enter($__internal_3a9af2953e4ffef115a6cc68dba94a101139fbc11fa40f634250edeff9be39ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalesBundle:invoice:show_pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"author\" content=\"Faizan Akram!\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>Sales Invoice ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            html {
              font-family: sans-serif;
              -ms-text-size-adjust: 100%;
              -webkit-text-size-adjust: 100%;
            }
            body {
              margin: 0;
            }
            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            main,
            menu,
            nav,
            section,
            summary {
              display: block;
            }

            a {
              background-color: transparent;
            }
            a:active,
            a:hover {
              outline: 0;
            }
            abbr[title] {
              border-bottom: 1px dotted;
            }
            b,
            strong {
              font-weight: bold;
            }
            h1 {
              font-size: 2em;
              margin: 0.67em 0;
            }

            hr {
              -webkit-box-sizing: content-box;
                 -moz-box-sizing: content-box;
                      box-sizing: content-box;
              height: 0;
            }
            table {
              border-collapse: collapse;
              border-spacing: 0;
            }
            td,
            th {
              padding: 0;
            }
            ul,
            ol {
              margin-top: 0;
              margin-bottom: 10px;
            }
            ul ul,
            ol ul,
            ul ol,
            ol ol {
              margin-bottom: 0;
            }
            .list-unstyled {
              padding-left: 0;
              list-style: none;
            }
            .list-inline {
              padding-left: 0;
              list-style: none;
              margin-left: -5px;
            }
            .list-inline > li {
              display: inline-block;
              padding-left: 5px;
              padding-right: 5px;
            }
            dl {
              margin-top: 0;
              margin-bottom: 20px;
            }
            dt,
            dd {
              line-height: 1.42857143;
            }
            dt {
              font-weight: bold;
            }
            dd {
              margin-left: 0;
            }

            .container {
              margin-right: auto;
              margin-left: auto;
              padding-left: 15px;
              padding-right: 15px;
            }
            @media (min-width: 768px) {
              .container {
                width: 750px;
              }
            }
            @media (min-width: 992px) {
              .container {
                width: 970px;
              }
            }
            @media (min-width: 1200px) {
              .container {
                width: 1170px;
              }
            }
            .container-fluid {
              margin-right: auto;
              margin-left: auto;
              padding-left: 15px;
              padding-right: 15px;
            }
            .row {
              margin-left: -15px;
              margin-right: -15px;
            }
            .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
              position: relative;
              min-height: 1px;
              padding-left: 15px;
              padding-right: 15px;
            }
            .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
              float: left;
            }
            .col-xs-12 {
              width: 100%;
            }
            .col-xs-11 {
              width: 91.66666667%;
            }
            .col-xs-10 {
              width: 83.33333333%;
            }
            .col-xs-9 {
              width: 75%;
            }
            .col-xs-8 {
              width: 66.66666667%;
            }
            .col-xs-7 {
              width: 58.33333333%;
            }
            .col-xs-6 {
              width: 50%;
            }
            .col-xs-5 {
              width: 41.66666667%;
            }
            .col-xs-4 {
              width: 33.33333333%;
            }
            .col-xs-3 {
              width: 25%;
            }
            .col-xs-2 {
              width: 16.66666667%;
            }
            .col-xs-1 {
              width: 8.33333333%;
            }
            .col-xs-pull-12 {
              right: 100%;
            }
            .col-xs-pull-11 {
              right: 91.66666667%;
            }
            .col-xs-pull-10 {
              right: 83.33333333%;
            }
            .col-xs-pull-9 {
              right: 75%;
            }
            .col-xs-pull-8 {
              right: 66.66666667%;
            }
            .col-xs-pull-7 {
              right: 58.33333333%;
            }
            .col-xs-pull-6 {
              right: 50%;
            }
            .col-xs-pull-5 {
              right: 41.66666667%;
            }
            .col-xs-pull-4 {
              right: 33.33333333%;
            }
            .col-xs-pull-3 {
              right: 25%;
            }
            .col-xs-pull-2 {
              right: 16.66666667%;
            }
            .col-xs-pull-1 {
              right: 8.33333333%;
            }
            .col-xs-pull-0 {
              right: auto;
            }
            .col-xs-push-12 {
              left: 100%;
            }
            .col-xs-push-11 {
              left: 91.66666667%;
            }
            .col-xs-push-10 {
              left: 83.33333333%;
            }
            .col-xs-push-9 {
              left: 75%;
            }
            .col-xs-push-8 {
              left: 66.66666667%;
            }
            .col-xs-push-7 {
              left: 58.33333333%;
            }
            .col-xs-push-6 {
              left: 50%;
            }
            .col-xs-push-5 {
              left: 41.66666667%;
            }
            .col-xs-push-4 {
              left: 33.33333333%;
            }
            .col-xs-push-3 {
              left: 25%;
            }
            .col-xs-push-2 {
              left: 16.66666667%;
            }
            .col-xs-push-1 {
              left: 8.33333333%;
            }
            .col-xs-push-0 {
              left: auto;
            }
            .col-xs-offset-12 {
              margin-left: 100%;
            }
            .col-xs-offset-11 {
              margin-left: 91.66666667%;
            }
            .col-xs-offset-10 {
              margin-left: 83.33333333%;
            }
            .col-xs-offset-9 {
              margin-left: 75%;
            }
            .col-xs-offset-8 {
              margin-left: 66.66666667%;
            }
            .col-xs-offset-7 {
              margin-left: 58.33333333%;
            }
            .col-xs-offset-6 {
              margin-left: 50%;
            }
            .col-xs-offset-5 {
              margin-left: 41.66666667%;
            }
            .col-xs-offset-4 {
              margin-left: 33.33333333%;
            }
            .col-xs-offset-3 {
              margin-left: 25%;
            }
            .col-xs-offset-2 {
              margin-left: 16.66666667%;
            }
            .col-xs-offset-1 {
              margin-left: 8.33333333%;
            }
            .col-xs-offset-0 {
              margin-left: 0%;
            }
            @media (min-width: 768px) {
              .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                float: left;
              }
              .col-sm-12 {
                width: 100%;
              }
              .col-sm-11 {
                width: 91.66666667%;
              }
              .col-sm-10 {
                width: 83.33333333%;
              }
              .col-sm-9 {
                width: 75%;
              }
              .col-sm-8 {
                width: 66.66666667%;
              }
              .col-sm-7 {
                width: 58.33333333%;
              }
              .col-sm-6 {
                width: 50%;
              }
              .col-sm-5 {
                width: 41.66666667%;
              }
              .col-sm-4 {
                width: 33.33333333%;
              }
              .col-sm-3 {
                width: 25%;
              }
              .col-sm-2 {
                width: 16.66666667%;
              }
              .col-sm-1 {
                width: 8.33333333%;
              }
              .col-sm-pull-12 {
                right: 100%;
              }
              .col-sm-pull-11 {
                right: 91.66666667%;
              }
              .col-sm-pull-10 {
                right: 83.33333333%;
              }
              .col-sm-pull-9 {
                right: 75%;
              }
              .col-sm-pull-8 {
                right: 66.66666667%;
              }
              .col-sm-pull-7 {
                right: 58.33333333%;
              }
              .col-sm-pull-6 {
                right: 50%;
              }
              .col-sm-pull-5 {
                right: 41.66666667%;
              }
              .col-sm-pull-4 {
                right: 33.33333333%;
              }
              .col-sm-pull-3 {
                right: 25%;
              }
              .col-sm-pull-2 {
                right: 16.66666667%;
              }
              .col-sm-pull-1 {
                right: 8.33333333%;
              }
              .col-sm-pull-0 {
                right: auto;
              }
              .col-sm-push-12 {
                left: 100%;
              }
              .col-sm-push-11 {
                left: 91.66666667%;
              }
              .col-sm-push-10 {
                left: 83.33333333%;
              }
              .col-sm-push-9 {
                left: 75%;
              }
              .col-sm-push-8 {
                left: 66.66666667%;
              }
              .col-sm-push-7 {
                left: 58.33333333%;
              }
              .col-sm-push-6 {
                left: 50%;
              }
              .col-sm-push-5 {
                left: 41.66666667%;
              }
              .col-sm-push-4 {
                left: 33.33333333%;
              }
              .col-sm-push-3 {
                left: 25%;
              }
              .col-sm-push-2 {
                left: 16.66666667%;
              }
              .col-sm-push-1 {
                left: 8.33333333%;
              }
              .col-sm-push-0 {
                left: auto;
              }
              .col-sm-offset-12 {
                margin-left: 100%;
              }
              .col-sm-offset-11 {
                margin-left: 91.66666667%;
              }
              .col-sm-offset-10 {
                margin-left: 83.33333333%;
              }
              .col-sm-offset-9 {
                margin-left: 75%;
              }
              .col-sm-offset-8 {
                margin-left: 66.66666667%;
              }
              .col-sm-offset-7 {
                margin-left: 58.33333333%;
              }
              .col-sm-offset-6 {
                margin-left: 50%;
              }
              .col-sm-offset-5 {
                margin-left: 41.66666667%;
              }
              .col-sm-offset-4 {
                margin-left: 33.33333333%;
              }
              .col-sm-offset-3 {
                margin-left: 25%;
              }
              .col-sm-offset-2 {
                margin-left: 16.66666667%;
              }
              .col-sm-offset-1 {
                margin-left: 8.33333333%;
              }
              .col-sm-offset-0 {
                margin-left: 0%;
              }
            }
            @media (min-width: 992px) {
              .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
                float: left;
              }
              .col-md-12 {
                width: 100%;
              }
              .col-md-11 {
                width: 91.66666667%;
              }
              .col-md-10 {
                width: 83.33333333%;
              }
              .col-md-9 {
                width: 75%;
              }
              .col-md-8 {
                width: 66.66666667%;
              }
              .col-md-7 {
                width: 58.33333333%;
              }
              .col-md-6 {
                width: 50%;
              }
              .col-md-5 {
                width: 41.66666667%;
              }
              .col-md-4 {
                width: 33.33333333%;
              }
              .col-md-3 {
                width: 25%;
              }
              .col-md-2 {
                width: 16.66666667%;
              }
              .col-md-1 {
                width: 8.33333333%;
              }
              .col-md-pull-12 {
                right: 100%;
              }
              .col-md-pull-11 {
                right: 91.66666667%;
              }
              .col-md-pull-10 {
                right: 83.33333333%;
              }
              .col-md-pull-9 {
                right: 75%;
              }
              .col-md-pull-8 {
                right: 66.66666667%;
              }
              .col-md-pull-7 {
                right: 58.33333333%;
              }
              .col-md-pull-6 {
                right: 50%;
              }
              .col-md-pull-5 {
                right: 41.66666667%;
              }
              .col-md-pull-4 {
                right: 33.33333333%;
              }
              .col-md-pull-3 {
                right: 25%;
              }
              .col-md-pull-2 {
                right: 16.66666667%;
              }
              .col-md-pull-1 {
                right: 8.33333333%;
              }
              .col-md-pull-0 {
                right: auto;
              }
              .col-md-push-12 {
                left: 100%;
              }
              .col-md-push-11 {
                left: 91.66666667%;
              }
              .col-md-push-10 {
                left: 83.33333333%;
              }
              .col-md-push-9 {
                left: 75%;
              }
              .col-md-push-8 {
                left: 66.66666667%;
              }
              .col-md-push-7 {
                left: 58.33333333%;
              }
              .col-md-push-6 {
                left: 50%;
              }
              .col-md-push-5 {
                left: 41.66666667%;
              }
              .col-md-push-4 {
                left: 33.33333333%;
              }
              .col-md-push-3 {
                left: 25%;
              }
              .col-md-push-2 {
                left: 16.66666667%;
              }
              .col-md-push-1 {
                left: 8.33333333%;
              }
              .col-md-push-0 {
                left: auto;
              }
              .col-md-offset-12 {
                margin-left: 100%;
              }
              .col-md-offset-11 {
                margin-left: 91.66666667%;
              }
              .col-md-offset-10 {
                margin-left: 83.33333333%;
              }
              .col-md-offset-9 {
                margin-left: 75%;
              }
              .col-md-offset-8 {
                margin-left: 66.66666667%;
              }
              .col-md-offset-7 {
                margin-left: 58.33333333%;
              }
              .col-md-offset-6 {
                margin-left: 50%;
              }
              .col-md-offset-5 {
                margin-left: 41.66666667%;
              }
              .col-md-offset-4 {
                margin-left: 33.33333333%;
              }
              .col-md-offset-3 {
                margin-left: 25%;
              }
              .col-md-offset-2 {
                margin-left: 16.66666667%;
              }
              .col-md-offset-1 {
                margin-left: 8.33333333%;
              }
              .col-md-offset-0 {
                margin-left: 0%;
              }
            }
            @media (min-width: 1200px) {
              .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
                float: left;
              }
              .col-lg-12 {
                width: 100%;
              }
              .col-lg-11 {
                width: 91.66666667%;
              }
              .col-lg-10 {
                width: 83.33333333%;
              }
              .col-lg-9 {
                width: 75%;
              }
              .col-lg-8 {
                width: 66.66666667%;
              }
              .col-lg-7 {
                width: 58.33333333%;
              }
              .col-lg-6 {
                width: 50%;
              }
              .col-lg-5 {
                width: 41.66666667%;
              }
              .col-lg-4 {
                width: 33.33333333%;
              }
              .col-lg-3 {
                width: 25%;
              }
              .col-lg-2 {
                width: 16.66666667%;
              }
              .col-lg-1 {
                width: 8.33333333%;
              }
              .col-lg-pull-12 {
                right: 100%;
              }
              .col-lg-pull-11 {
                right: 91.66666667%;
              }
              .col-lg-pull-10 {
                right: 83.33333333%;
              }
              .col-lg-pull-9 {
                right: 75%;
              }
              .col-lg-pull-8 {
                right: 66.66666667%;
              }
              .col-lg-pull-7 {
                right: 58.33333333%;
              }
              .col-lg-pull-6 {
                right: 50%;
              }
              .col-lg-pull-5 {
                right: 41.66666667%;
              }
              .col-lg-pull-4 {
                right: 33.33333333%;
              }
              .col-lg-pull-3 {
                right: 25%;
              }
              .col-lg-pull-2 {
                right: 16.66666667%;
              }
              .col-lg-pull-1 {
                right: 8.33333333%;
              }
              .col-lg-pull-0 {
                right: auto;
              }
              .col-lg-push-12 {
                left: 100%;
              }
              .col-lg-push-11 {
                left: 91.66666667%;
              }
              .col-lg-push-10 {
                left: 83.33333333%;
              }
              .col-lg-push-9 {
                left: 75%;
              }
              .col-lg-push-8 {
                left: 66.66666667%;
              }
              .col-lg-push-7 {
                left: 58.33333333%;
              }
              .col-lg-push-6 {
                left: 50%;
              }
              .col-lg-push-5 {
                left: 41.66666667%;
              }
              .col-lg-push-4 {
                left: 33.33333333%;
              }
              .col-lg-push-3 {
                left: 25%;
              }
              .col-lg-push-2 {
                left: 16.66666667%;
              }
              .col-lg-push-1 {
                left: 8.33333333%;
              }
              .col-lg-push-0 {
                left: auto;
              }
              .col-lg-offset-12 {
                margin-left: 100%;
              }
              .col-lg-offset-11 {
                margin-left: 91.66666667%;
              }
              .col-lg-offset-10 {
                margin-left: 83.33333333%;
              }
              .col-lg-offset-9 {
                margin-left: 75%;
              }
              .col-lg-offset-8 {
                margin-left: 66.66666667%;
              }
              .col-lg-offset-7 {
                margin-left: 58.33333333%;
              }
              .col-lg-offset-6 {
                margin-left: 50%;
              }
              .col-lg-offset-5 {
                margin-left: 41.66666667%;
              }
              .col-lg-offset-4 {
                margin-left: 33.33333333%;
              }
              .col-lg-offset-3 {
                margin-left: 25%;
              }
              .col-lg-offset-2 {
                margin-left: 16.66666667%;
              }
              .col-lg-offset-1 {
                margin-left: 8.33333333%;
              }
              .col-lg-offset-0 {
                margin-left: 0%;
              }
            }
            table {
              background-color: transparent;
            }
            caption {
              padding-top: 8px;
              padding-bottom: 8px;
              color: #777777;
              text-align: left;
            }
            th {
              text-align: left;
            }
            .table {
              width: 100%;
              max-width: 100%;
              margin-bottom: 20px;
            }
            .table > thead > tr > th,
            .table > tbody > tr > th,
            .table > tfoot > tr > th,
            .table > thead > tr > td,
            .table > tbody > tr > td,
            .table > tfoot > tr > td {
              padding: 8px;
              line-height: 1.42857143;
              vertical-align: top;
              border-top: 1px solid #dddddd;
            }
            .table > thead > tr > th {
              vertical-align: bottom;
              border-bottom: 2px solid #dddddd;
            }
            .table > caption + thead > tr:first-child > th,
            .table > colgroup + thead > tr:first-child > th,
            .table > thead:first-child > tr:first-child > th,
            .table > caption + thead > tr:first-child > td,
            .table > colgroup + thead > tr:first-child > td,
            .table > thead:first-child > tr:first-child > td {
              border-top: 0;
            }
            .table > tbody + tbody {
              border-top: 2px solid #dddddd;
            }
            .table .table {
              background-color: #ffffff;
            }
            .table-condensed > thead > tr > th,
            .table-condensed > tbody > tr > th,
            .table-condensed > tfoot > tr > th,
            .table-condensed > thead > tr > td,
            .table-condensed > tbody > tr > td,
            .table-condensed > tfoot > tr > td {
              padding: 5px;
            }
            .table-bordered {
              border: 1px solid #dddddd;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
              border: 1px solid #dddddd;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > thead > tr > td {
              border-bottom-width: 2px;
            }
            .table-striped > tbody > tr:nth-of-type(odd) {
              background-color: #f9f9f9;
            }
            .table-hover > tbody > tr:hover {
              background-color: #f5f5f5;
            }
            table col[class*=\"col-\"] {
              position: static;
              float: none;
              display: table-column;
            }
            table td[class*=\"col-\"],
            table th[class*=\"col-\"] {
              position: static;
              float: none;
              display: table-cell;
            }
            .table > thead > tr > td.active,
            .table > tbody > tr > td.active,
            .table > tfoot > tr > td.active,
            .table > thead > tr > th.active,
            .table > tbody > tr > th.active,
            .table > tfoot > tr > th.active,
            .table > thead > tr.active > td,
            .table > tbody > tr.active > td,
            .table > tfoot > tr.active > td,
            .table > thead > tr.active > th,
            .table > tbody > tr.active > th,
            .table > tfoot > tr.active > th {
              background-color: #f5f5f5;
            }
            .table-hover > tbody > tr > td.active:hover,
            .table-hover > tbody > tr > th.active:hover,
            .table-hover > tbody > tr.active:hover > td,
            .table-hover > tbody > tr:hover > .active,
            .table-hover > tbody > tr.active:hover > th {
              background-color: #e8e8e8;
            }
            .table > thead > tr > td.success,
            .table > tbody > tr > td.success,
            .table > tfoot > tr > td.success,
            .table > thead > tr > th.success,
            .table > tbody > tr > th.success,
            .table > tfoot > tr > th.success,
            .table > thead > tr.success > td,
            .table > tbody > tr.success > td,
            .table > tfoot > tr.success > td,
            .table > thead > tr.success > th,
            .table > tbody > tr.success > th,
            .table > tfoot > tr.success > th {
              background-color: #dff0d8;
            }
            .table-hover > tbody > tr > td.success:hover,
            .table-hover > tbody > tr > th.success:hover,
            .table-hover > tbody > tr.success:hover > td,
            .table-hover > tbody > tr:hover > .success,
            .table-hover > tbody > tr.success:hover > th {
              background-color: #d0e9c6;
            }
            .table > thead > tr > td.info,
            .table > tbody > tr > td.info,
            .table > tfoot > tr > td.info,
            .table > thead > tr > th.info,
            .table > tbody > tr > th.info,
            .table > tfoot > tr > th.info,
            .table > thead > tr.info > td,
            .table > tbody > tr.info > td,
            .table > tfoot > tr.info > td,
            .table > thead > tr.info > th,
            .table > tbody > tr.info > th,
            .table > tfoot > tr.info > th {
              background-color: #d9edf7;
            }
            .table-hover > tbody > tr > td.info:hover,
            .table-hover > tbody > tr > th.info:hover,
            .table-hover > tbody > tr.info:hover > td,
            .table-hover > tbody > tr:hover > .info,
            .table-hover > tbody > tr.info:hover > th {
              background-color: #c4e3f3;
            }
            .table > thead > tr > td.warning,
            .table > tbody > tr > td.warning,
            .table > tfoot > tr > td.warning,
            .table > thead > tr > th.warning,
            .table > tbody > tr > th.warning,
            .table > tfoot > tr > th.warning,
            .table > thead > tr.warning > td,
            .table > tbody > tr.warning > td,
            .table > tfoot > tr.warning > td,
            .table > thead > tr.warning > th,
            .table > tbody > tr.warning > th,
            .table > tfoot > tr.warning > th {
              background-color: #fcf8e3;
            }
            .table-hover > tbody > tr > td.warning:hover,
            .table-hover > tbody > tr > th.warning:hover,
            .table-hover > tbody > tr.warning:hover > td,
            .table-hover > tbody > tr:hover > .warning,
            .table-hover > tbody > tr.warning:hover > th {
              background-color: #faf2cc;
            }
            .table > thead > tr > td.danger,
            .table > tbody > tr > td.danger,
            .table > tfoot > tr > td.danger,
            .table > thead > tr > th.danger,
            .table > tbody > tr > th.danger,
            .table > tfoot > tr > th.danger,
            .table > thead > tr.danger > td,
            .table > tbody > tr.danger > td,
            .table > tfoot > tr.danger > td,
            .table > thead > tr.danger > th,
            .table > tbody > tr.danger > th,
            .table > tfoot > tr.danger > th {
              background-color: #f2dede;
            }
            .table-hover > tbody > tr > td.danger:hover,
            .table-hover > tbody > tr > th.danger:hover,
            .table-hover > tbody > tr.danger:hover > td,
            .table-hover > tbody > tr:hover > .danger,
            .table-hover > tbody > tr.danger:hover > th {
              background-color: #ebcccc;
            }
            .table-responsive {
              overflow-x: auto;
              min-height: 0.01%;
            }
            @media screen and (max-width: 767px) {
              .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-y: hidden;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #dddddd;
              }
              .table-responsive > .table {
                margin-bottom: 0;
              }
              .table-responsive > .table > thead > tr > th,
              .table-responsive > .table > tbody > tr > th,
              .table-responsive > .table > tfoot > tr > th,
              .table-responsive > .table > thead > tr > td,
              .table-responsive > .table > tbody > tr > td,
              .table-responsive > .table > tfoot > tr > td {
                white-space: nowrap;
              }
              .table-responsive > .table-bordered {
                border: 0;
              }
              .table-responsive > .table-bordered > thead > tr > th:first-child,
              .table-responsive > .table-bordered > tbody > tr > th:first-child,
              .table-responsive > .table-bordered > tfoot > tr > th:first-child,
              .table-responsive > .table-bordered > thead > tr > td:first-child,
              .table-responsive > .table-bordered > tbody > tr > td:first-child,
              .table-responsive > .table-bordered > tfoot > tr > td:first-child {
                border-left: 0;
              }
              .table-responsive > .table-bordered > thead > tr > th:last-child,
              .table-responsive > .table-bordered > tbody > tr > th:last-child,
              .table-responsive > .table-bordered > tfoot > tr > th:last-child,
              .table-responsive > .table-bordered > thead > tr > td:last-child,
              .table-responsive > .table-bordered > tbody > tr > td:last-child,
              .table-responsive > .table-bordered > tfoot > tr > td:last-child {
                border-right: 0;
              }
              .table-responsive > .table-bordered > tbody > tr:last-child > th,
              .table-responsive > .table-bordered > tfoot > tr:last-child > th,
              .table-responsive > .table-bordered > tbody > tr:last-child > td,
              .table-responsive > .table-bordered > tfoot > tr:last-child > td {
                border-bottom: 0;
              }
            }
            .clearfix:before,
            .clearfix:after,
            .dl-horizontal dd:before,
            .dl-horizontal dd:after,
            .container:before,
            .container:after,
            .container-fluid:before,
            .container-fluid:after,
            .row:before,
            .row:after {
              content: \" \";
              display: table;
            }
            .clearfix:after,
            .dl-horizontal dd:after,
            .container:after,
            .container-fluid:after,
            .row:after {
              clear: both;
            }
            .center-block {
              display: block;
              margin-left: auto;
              margin-right: auto;
            }
            .pull-right {
              float: right !important;
            }
            .pull-left {
              float: left !important;
            }
            .hide {
              display: none !important;
            }
            .show {
              display: block !important;
            }
            .invisible {
              visibility: hidden;
            }
            .text-hide {
              font: 0/0 a;
              color: transparent;
              text-shadow: none;
              background-color: transparent;
              border: 0;
            }
            .hidden {
              display: none !important;
            }
            .affix {
              position: fixed;
            }
            @-ms-viewport {
              width: device-width;
            }
            .visible-xs,
            .visible-sm,
            .visible-md,
            .visible-lg {
              display: none !important;
            }
            .visible-xs-block,
            .visible-xs-inline,
            .visible-xs-inline-block,
            .visible-sm-block,
            .visible-sm-inline,
            .visible-sm-inline-block,
            .visible-md-block,
            .visible-md-inline,
            .visible-md-inline-block,
            .visible-lg-block,
            .visible-lg-inline,
            .visible-lg-inline-block {
              display: none !important;
            }
            @media (max-width: 767px) {
              .visible-xs {
                display: block !important;
              }
              table.visible-xs {
                display: table !important;
              }
              tr.visible-xs {
                display: table-row !important;
              }
              th.visible-xs,
              td.visible-xs {
                display: table-cell !important;
              }
            }
            @media (max-width: 767px) {
              .visible-xs-block {
                display: block !important;
              }
            }
            @media (max-width: 767px) {
              .visible-xs-inline {
                display: inline !important;
              }
            }
            @media (max-width: 767px) {
              .visible-xs-inline-block {
                display: inline-block !important;
              }
            }
            @media (min-width: 768px) and (max-width: 991px) {
              .visible-sm {
                display: block !important;
              }
              table.visible-sm {
                display: table !important;
              }
              tr.visible-sm {
                display: table-row !important;
              }
              th.visible-sm,
              td.visible-sm {
                display: table-cell !important;
              }
            }
            @media (min-width: 768px) and (max-width: 991px) {
              .visible-sm-block {
                display: block !important;
              }
            }
            @media (min-width: 768px) and (max-width: 991px) {
              .visible-sm-inline {
                display: inline !important;
              }
            }
            @media (min-width: 768px) and (max-width: 991px) {
              .visible-sm-inline-block {
                display: inline-block !important;
              }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
              .visible-md {
                display: block !important;
              }
              table.visible-md {
                display: table !important;
              }
              tr.visible-md {
                display: table-row !important;
              }
              th.visible-md,
              td.visible-md {
                display: table-cell !important;
              }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
              .visible-md-block {
                display: block !important;
              }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
              .visible-md-inline {
                display: inline !important;
              }
            }
            @media (min-width: 992px) and (max-width: 1199px) {
              .visible-md-inline-block {
                display: inline-block !important;
              }
            }
            @media (min-width: 1200px) {
              .visible-lg {
                display: block !important;
              }
              table.visible-lg {
                display: table !important;
              }
              tr.visible-lg {
                display: table-row !important;
              }
              th.visible-lg,
              td.visible-lg {
                display: table-cell !important;
              }
            }
            h1{
                text-align: center;
                margin-bottom: 40px;
            }

            .show-amount{
                margin-top: -20px;
            }

        </style>
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 1208
        $this->displayBlock('body', $context, $blocks);
        // line 1276
        echo "        </div>

    </body>
</html>
";
        
        $__internal_3a9af2953e4ffef115a6cc68dba94a101139fbc11fa40f634250edeff9be39ce->leave($__internal_3a9af2953e4ffef115a6cc68dba94a101139fbc11fa40f634250edeff9be39ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45181d6549dc1f1809a5f8bd75be08bae6468a6cdfbd9be7495a527e4c11260e = $this->env->getExtension("native_profiler");
        $__internal_45181d6549dc1f1809a5f8bd75be08bae6468a6cdfbd9be7495a527e4c11260e->enter($__internal_45181d6549dc1f1809a5f8bd75be08bae6468a6cdfbd9be7495a527e4c11260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Show Invoice ";
        
        $__internal_45181d6549dc1f1809a5f8bd75be08bae6468a6cdfbd9be7495a527e4c11260e->leave($__internal_45181d6549dc1f1809a5f8bd75be08bae6468a6cdfbd9be7495a527e4c11260e_prof);

    }

    // line 1208
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf2b4df5172d64d86a1d00a0cf15885471413961ad22b673960e12a8e0d670b = $this->env->getExtension("native_profiler");
        $__internal_acf2b4df5172d64d86a1d00a0cf15885471413961ad22b673960e12a8e0d670b->enter($__internal_acf2b4df5172d64d86a1d00a0cf15885471413961ad22b673960e12a8e0d670b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 1209
        echo "                <h1>Invoice</h1>

                <table class=\"table table-bordered table-striped table-hover\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 1215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Invoice Number</th>
                            <td>";
        // line 1219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "number", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>";
        // line 1223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "address", array()), "html", null, true);
        echo "</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>";
        // line 1228
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "email", array()), "html", null, true);
        echo "</td>
                        </tr>

                        <tr>
                            <th>Date</th>
                            <td>";
        // line 1233
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>


                            <tr>
                                <th>Products</th>

                                    <td>
                                        <ul class=\"list-unstyled row\">
                                            ";
        // line 1242
        $context["amount"] = 0;
        // line 1243
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : $this->getContext($context, "invoice")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 1244
            echo "
                                                <li>
                                                    <div class=\"col-xs-8\">
                                                        ";
            // line 1247
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "
                                                    </div>

                                                    <div class=\"col-xs-3 pull-right show-amount\">
                                                        - ";
            // line 1251
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "amount", array()), "html", null, true);
            echo "\$
                                                    </div>
                                                </li>
                                                ";
            // line 1254
            $context["amount"] = ((isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")) + $this->getAttribute($context["product"], "amount", array()));
            // line 1255
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1256
        echo "
                                            <li>
                                                <div class=\"clearfix\"></div>

                                                <div class=\"h4 col-xs-9\">
                                                    Total
                                                </div>

                                                <div class=\"h4 col-xs-3 pull-right show-amount\">
                                                    - ";
        // line 1265
        echo twig_escape_filter($this->env, (isset($context["amount"]) ? $context["amount"] : $this->getContext($context, "amount")), "html", null, true);
        echo "\$
                                                </div>
                                            </li>

                                        </ul>
                                    </td>
                            </tr>

                    </tbody>
                </table>
            ";
        
        $__internal_acf2b4df5172d64d86a1d00a0cf15885471413961ad22b673960e12a8e0d670b->leave($__internal_acf2b4df5172d64d86a1d00a0cf15885471413961ad22b673960e12a8e0d670b_prof);

    }

    public function getTemplateName()
    {
        return "SalesBundle:invoice:show_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1366 => 1265,  1355 => 1256,  1349 => 1255,  1347 => 1254,  1341 => 1251,  1334 => 1247,  1329 => 1244,  1324 => 1243,  1322 => 1242,  1308 => 1233,  1300 => 1228,  1292 => 1223,  1285 => 1219,  1278 => 1215,  1270 => 1209,  1264 => 1208,  1252 => 7,  1241 => 1276,  1239 => 1208,  36 => 8,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="author" content="Faizan Akram!" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*         <title>Sales Invoice {% block title %} | Show Invoice {% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style>*/
/*             html {*/
/*               font-family: sans-serif;*/
/*               -ms-text-size-adjust: 100%;*/
/*               -webkit-text-size-adjust: 100%;*/
/*             }*/
/*             body {*/
/*               margin: 0;*/
/*             }*/
/*             article,*/
/*             aside,*/
/*             details,*/
/*             figcaption,*/
/*             figure,*/
/*             footer,*/
/*             header,*/
/*             hgroup,*/
/*             main,*/
/*             menu,*/
/*             nav,*/
/*             section,*/
/*             summary {*/
/*               display: block;*/
/*             }*/
/* */
/*             a {*/
/*               background-color: transparent;*/
/*             }*/
/*             a:active,*/
/*             a:hover {*/
/*               outline: 0;*/
/*             }*/
/*             abbr[title] {*/
/*               border-bottom: 1px dotted;*/
/*             }*/
/*             b,*/
/*             strong {*/
/*               font-weight: bold;*/
/*             }*/
/*             h1 {*/
/*               font-size: 2em;*/
/*               margin: 0.67em 0;*/
/*             }*/
/* */
/*             hr {*/
/*               -webkit-box-sizing: content-box;*/
/*                  -moz-box-sizing: content-box;*/
/*                       box-sizing: content-box;*/
/*               height: 0;*/
/*             }*/
/*             table {*/
/*               border-collapse: collapse;*/
/*               border-spacing: 0;*/
/*             }*/
/*             td,*/
/*             th {*/
/*               padding: 0;*/
/*             }*/
/*             ul,*/
/*             ol {*/
/*               margin-top: 0;*/
/*               margin-bottom: 10px;*/
/*             }*/
/*             ul ul,*/
/*             ol ul,*/
/*             ul ol,*/
/*             ol ol {*/
/*               margin-bottom: 0;*/
/*             }*/
/*             .list-unstyled {*/
/*               padding-left: 0;*/
/*               list-style: none;*/
/*             }*/
/*             .list-inline {*/
/*               padding-left: 0;*/
/*               list-style: none;*/
/*               margin-left: -5px;*/
/*             }*/
/*             .list-inline > li {*/
/*               display: inline-block;*/
/*               padding-left: 5px;*/
/*               padding-right: 5px;*/
/*             }*/
/*             dl {*/
/*               margin-top: 0;*/
/*               margin-bottom: 20px;*/
/*             }*/
/*             dt,*/
/*             dd {*/
/*               line-height: 1.42857143;*/
/*             }*/
/*             dt {*/
/*               font-weight: bold;*/
/*             }*/
/*             dd {*/
/*               margin-left: 0;*/
/*             }*/
/* */
/*             .container {*/
/*               margin-right: auto;*/
/*               margin-left: auto;*/
/*               padding-left: 15px;*/
/*               padding-right: 15px;*/
/*             }*/
/*             @media (min-width: 768px) {*/
/*               .container {*/
/*                 width: 750px;*/
/*               }*/
/*             }*/
/*             @media (min-width: 992px) {*/
/*               .container {*/
/*                 width: 970px;*/
/*               }*/
/*             }*/
/*             @media (min-width: 1200px) {*/
/*               .container {*/
/*                 width: 1170px;*/
/*               }*/
/*             }*/
/*             .container-fluid {*/
/*               margin-right: auto;*/
/*               margin-left: auto;*/
/*               padding-left: 15px;*/
/*               padding-right: 15px;*/
/*             }*/
/*             .row {*/
/*               margin-left: -15px;*/
/*               margin-right: -15px;*/
/*             }*/
/*             .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {*/
/*               position: relative;*/
/*               min-height: 1px;*/
/*               padding-left: 15px;*/
/*               padding-right: 15px;*/
/*             }*/
/*             .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {*/
/*               float: left;*/
/*             }*/
/*             .col-xs-12 {*/
/*               width: 100%;*/
/*             }*/
/*             .col-xs-11 {*/
/*               width: 91.66666667%;*/
/*             }*/
/*             .col-xs-10 {*/
/*               width: 83.33333333%;*/
/*             }*/
/*             .col-xs-9 {*/
/*               width: 75%;*/
/*             }*/
/*             .col-xs-8 {*/
/*               width: 66.66666667%;*/
/*             }*/
/*             .col-xs-7 {*/
/*               width: 58.33333333%;*/
/*             }*/
/*             .col-xs-6 {*/
/*               width: 50%;*/
/*             }*/
/*             .col-xs-5 {*/
/*               width: 41.66666667%;*/
/*             }*/
/*             .col-xs-4 {*/
/*               width: 33.33333333%;*/
/*             }*/
/*             .col-xs-3 {*/
/*               width: 25%;*/
/*             }*/
/*             .col-xs-2 {*/
/*               width: 16.66666667%;*/
/*             }*/
/*             .col-xs-1 {*/
/*               width: 8.33333333%;*/
/*             }*/
/*             .col-xs-pull-12 {*/
/*               right: 100%;*/
/*             }*/
/*             .col-xs-pull-11 {*/
/*               right: 91.66666667%;*/
/*             }*/
/*             .col-xs-pull-10 {*/
/*               right: 83.33333333%;*/
/*             }*/
/*             .col-xs-pull-9 {*/
/*               right: 75%;*/
/*             }*/
/*             .col-xs-pull-8 {*/
/*               right: 66.66666667%;*/
/*             }*/
/*             .col-xs-pull-7 {*/
/*               right: 58.33333333%;*/
/*             }*/
/*             .col-xs-pull-6 {*/
/*               right: 50%;*/
/*             }*/
/*             .col-xs-pull-5 {*/
/*               right: 41.66666667%;*/
/*             }*/
/*             .col-xs-pull-4 {*/
/*               right: 33.33333333%;*/
/*             }*/
/*             .col-xs-pull-3 {*/
/*               right: 25%;*/
/*             }*/
/*             .col-xs-pull-2 {*/
/*               right: 16.66666667%;*/
/*             }*/
/*             .col-xs-pull-1 {*/
/*               right: 8.33333333%;*/
/*             }*/
/*             .col-xs-pull-0 {*/
/*               right: auto;*/
/*             }*/
/*             .col-xs-push-12 {*/
/*               left: 100%;*/
/*             }*/
/*             .col-xs-push-11 {*/
/*               left: 91.66666667%;*/
/*             }*/
/*             .col-xs-push-10 {*/
/*               left: 83.33333333%;*/
/*             }*/
/*             .col-xs-push-9 {*/
/*               left: 75%;*/
/*             }*/
/*             .col-xs-push-8 {*/
/*               left: 66.66666667%;*/
/*             }*/
/*             .col-xs-push-7 {*/
/*               left: 58.33333333%;*/
/*             }*/
/*             .col-xs-push-6 {*/
/*               left: 50%;*/
/*             }*/
/*             .col-xs-push-5 {*/
/*               left: 41.66666667%;*/
/*             }*/
/*             .col-xs-push-4 {*/
/*               left: 33.33333333%;*/
/*             }*/
/*             .col-xs-push-3 {*/
/*               left: 25%;*/
/*             }*/
/*             .col-xs-push-2 {*/
/*               left: 16.66666667%;*/
/*             }*/
/*             .col-xs-push-1 {*/
/*               left: 8.33333333%;*/
/*             }*/
/*             .col-xs-push-0 {*/
/*               left: auto;*/
/*             }*/
/*             .col-xs-offset-12 {*/
/*               margin-left: 100%;*/
/*             }*/
/*             .col-xs-offset-11 {*/
/*               margin-left: 91.66666667%;*/
/*             }*/
/*             .col-xs-offset-10 {*/
/*               margin-left: 83.33333333%;*/
/*             }*/
/*             .col-xs-offset-9 {*/
/*               margin-left: 75%;*/
/*             }*/
/*             .col-xs-offset-8 {*/
/*               margin-left: 66.66666667%;*/
/*             }*/
/*             .col-xs-offset-7 {*/
/*               margin-left: 58.33333333%;*/
/*             }*/
/*             .col-xs-offset-6 {*/
/*               margin-left: 50%;*/
/*             }*/
/*             .col-xs-offset-5 {*/
/*               margin-left: 41.66666667%;*/
/*             }*/
/*             .col-xs-offset-4 {*/
/*               margin-left: 33.33333333%;*/
/*             }*/
/*             .col-xs-offset-3 {*/
/*               margin-left: 25%;*/
/*             }*/
/*             .col-xs-offset-2 {*/
/*               margin-left: 16.66666667%;*/
/*             }*/
/*             .col-xs-offset-1 {*/
/*               margin-left: 8.33333333%;*/
/*             }*/
/*             .col-xs-offset-0 {*/
/*               margin-left: 0%;*/
/*             }*/
/*             @media (min-width: 768px) {*/
/*               .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {*/
/*                 float: left;*/
/*               }*/
/*               .col-sm-12 {*/
/*                 width: 100%;*/
/*               }*/
/*               .col-sm-11 {*/
/*                 width: 91.66666667%;*/
/*               }*/
/*               .col-sm-10 {*/
/*                 width: 83.33333333%;*/
/*               }*/
/*               .col-sm-9 {*/
/*                 width: 75%;*/
/*               }*/
/*               .col-sm-8 {*/
/*                 width: 66.66666667%;*/
/*               }*/
/*               .col-sm-7 {*/
/*                 width: 58.33333333%;*/
/*               }*/
/*               .col-sm-6 {*/
/*                 width: 50%;*/
/*               }*/
/*               .col-sm-5 {*/
/*                 width: 41.66666667%;*/
/*               }*/
/*               .col-sm-4 {*/
/*                 width: 33.33333333%;*/
/*               }*/
/*               .col-sm-3 {*/
/*                 width: 25%;*/
/*               }*/
/*               .col-sm-2 {*/
/*                 width: 16.66666667%;*/
/*               }*/
/*               .col-sm-1 {*/
/*                 width: 8.33333333%;*/
/*               }*/
/*               .col-sm-pull-12 {*/
/*                 right: 100%;*/
/*               }*/
/*               .col-sm-pull-11 {*/
/*                 right: 91.66666667%;*/
/*               }*/
/*               .col-sm-pull-10 {*/
/*                 right: 83.33333333%;*/
/*               }*/
/*               .col-sm-pull-9 {*/
/*                 right: 75%;*/
/*               }*/
/*               .col-sm-pull-8 {*/
/*                 right: 66.66666667%;*/
/*               }*/
/*               .col-sm-pull-7 {*/
/*                 right: 58.33333333%;*/
/*               }*/
/*               .col-sm-pull-6 {*/
/*                 right: 50%;*/
/*               }*/
/*               .col-sm-pull-5 {*/
/*                 right: 41.66666667%;*/
/*               }*/
/*               .col-sm-pull-4 {*/
/*                 right: 33.33333333%;*/
/*               }*/
/*               .col-sm-pull-3 {*/
/*                 right: 25%;*/
/*               }*/
/*               .col-sm-pull-2 {*/
/*                 right: 16.66666667%;*/
/*               }*/
/*               .col-sm-pull-1 {*/
/*                 right: 8.33333333%;*/
/*               }*/
/*               .col-sm-pull-0 {*/
/*                 right: auto;*/
/*               }*/
/*               .col-sm-push-12 {*/
/*                 left: 100%;*/
/*               }*/
/*               .col-sm-push-11 {*/
/*                 left: 91.66666667%;*/
/*               }*/
/*               .col-sm-push-10 {*/
/*                 left: 83.33333333%;*/
/*               }*/
/*               .col-sm-push-9 {*/
/*                 left: 75%;*/
/*               }*/
/*               .col-sm-push-8 {*/
/*                 left: 66.66666667%;*/
/*               }*/
/*               .col-sm-push-7 {*/
/*                 left: 58.33333333%;*/
/*               }*/
/*               .col-sm-push-6 {*/
/*                 left: 50%;*/
/*               }*/
/*               .col-sm-push-5 {*/
/*                 left: 41.66666667%;*/
/*               }*/
/*               .col-sm-push-4 {*/
/*                 left: 33.33333333%;*/
/*               }*/
/*               .col-sm-push-3 {*/
/*                 left: 25%;*/
/*               }*/
/*               .col-sm-push-2 {*/
/*                 left: 16.66666667%;*/
/*               }*/
/*               .col-sm-push-1 {*/
/*                 left: 8.33333333%;*/
/*               }*/
/*               .col-sm-push-0 {*/
/*                 left: auto;*/
/*               }*/
/*               .col-sm-offset-12 {*/
/*                 margin-left: 100%;*/
/*               }*/
/*               .col-sm-offset-11 {*/
/*                 margin-left: 91.66666667%;*/
/*               }*/
/*               .col-sm-offset-10 {*/
/*                 margin-left: 83.33333333%;*/
/*               }*/
/*               .col-sm-offset-9 {*/
/*                 margin-left: 75%;*/
/*               }*/
/*               .col-sm-offset-8 {*/
/*                 margin-left: 66.66666667%;*/
/*               }*/
/*               .col-sm-offset-7 {*/
/*                 margin-left: 58.33333333%;*/
/*               }*/
/*               .col-sm-offset-6 {*/
/*                 margin-left: 50%;*/
/*               }*/
/*               .col-sm-offset-5 {*/
/*                 margin-left: 41.66666667%;*/
/*               }*/
/*               .col-sm-offset-4 {*/
/*                 margin-left: 33.33333333%;*/
/*               }*/
/*               .col-sm-offset-3 {*/
/*                 margin-left: 25%;*/
/*               }*/
/*               .col-sm-offset-2 {*/
/*                 margin-left: 16.66666667%;*/
/*               }*/
/*               .col-sm-offset-1 {*/
/*                 margin-left: 8.33333333%;*/
/*               }*/
/*               .col-sm-offset-0 {*/
/*                 margin-left: 0%;*/
/*               }*/
/*             }*/
/*             @media (min-width: 992px) {*/
/*               .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {*/
/*                 float: left;*/
/*               }*/
/*               .col-md-12 {*/
/*                 width: 100%;*/
/*               }*/
/*               .col-md-11 {*/
/*                 width: 91.66666667%;*/
/*               }*/
/*               .col-md-10 {*/
/*                 width: 83.33333333%;*/
/*               }*/
/*               .col-md-9 {*/
/*                 width: 75%;*/
/*               }*/
/*               .col-md-8 {*/
/*                 width: 66.66666667%;*/
/*               }*/
/*               .col-md-7 {*/
/*                 width: 58.33333333%;*/
/*               }*/
/*               .col-md-6 {*/
/*                 width: 50%;*/
/*               }*/
/*               .col-md-5 {*/
/*                 width: 41.66666667%;*/
/*               }*/
/*               .col-md-4 {*/
/*                 width: 33.33333333%;*/
/*               }*/
/*               .col-md-3 {*/
/*                 width: 25%;*/
/*               }*/
/*               .col-md-2 {*/
/*                 width: 16.66666667%;*/
/*               }*/
/*               .col-md-1 {*/
/*                 width: 8.33333333%;*/
/*               }*/
/*               .col-md-pull-12 {*/
/*                 right: 100%;*/
/*               }*/
/*               .col-md-pull-11 {*/
/*                 right: 91.66666667%;*/
/*               }*/
/*               .col-md-pull-10 {*/
/*                 right: 83.33333333%;*/
/*               }*/
/*               .col-md-pull-9 {*/
/*                 right: 75%;*/
/*               }*/
/*               .col-md-pull-8 {*/
/*                 right: 66.66666667%;*/
/*               }*/
/*               .col-md-pull-7 {*/
/*                 right: 58.33333333%;*/
/*               }*/
/*               .col-md-pull-6 {*/
/*                 right: 50%;*/
/*               }*/
/*               .col-md-pull-5 {*/
/*                 right: 41.66666667%;*/
/*               }*/
/*               .col-md-pull-4 {*/
/*                 right: 33.33333333%;*/
/*               }*/
/*               .col-md-pull-3 {*/
/*                 right: 25%;*/
/*               }*/
/*               .col-md-pull-2 {*/
/*                 right: 16.66666667%;*/
/*               }*/
/*               .col-md-pull-1 {*/
/*                 right: 8.33333333%;*/
/*               }*/
/*               .col-md-pull-0 {*/
/*                 right: auto;*/
/*               }*/
/*               .col-md-push-12 {*/
/*                 left: 100%;*/
/*               }*/
/*               .col-md-push-11 {*/
/*                 left: 91.66666667%;*/
/*               }*/
/*               .col-md-push-10 {*/
/*                 left: 83.33333333%;*/
/*               }*/
/*               .col-md-push-9 {*/
/*                 left: 75%;*/
/*               }*/
/*               .col-md-push-8 {*/
/*                 left: 66.66666667%;*/
/*               }*/
/*               .col-md-push-7 {*/
/*                 left: 58.33333333%;*/
/*               }*/
/*               .col-md-push-6 {*/
/*                 left: 50%;*/
/*               }*/
/*               .col-md-push-5 {*/
/*                 left: 41.66666667%;*/
/*               }*/
/*               .col-md-push-4 {*/
/*                 left: 33.33333333%;*/
/*               }*/
/*               .col-md-push-3 {*/
/*                 left: 25%;*/
/*               }*/
/*               .col-md-push-2 {*/
/*                 left: 16.66666667%;*/
/*               }*/
/*               .col-md-push-1 {*/
/*                 left: 8.33333333%;*/
/*               }*/
/*               .col-md-push-0 {*/
/*                 left: auto;*/
/*               }*/
/*               .col-md-offset-12 {*/
/*                 margin-left: 100%;*/
/*               }*/
/*               .col-md-offset-11 {*/
/*                 margin-left: 91.66666667%;*/
/*               }*/
/*               .col-md-offset-10 {*/
/*                 margin-left: 83.33333333%;*/
/*               }*/
/*               .col-md-offset-9 {*/
/*                 margin-left: 75%;*/
/*               }*/
/*               .col-md-offset-8 {*/
/*                 margin-left: 66.66666667%;*/
/*               }*/
/*               .col-md-offset-7 {*/
/*                 margin-left: 58.33333333%;*/
/*               }*/
/*               .col-md-offset-6 {*/
/*                 margin-left: 50%;*/
/*               }*/
/*               .col-md-offset-5 {*/
/*                 margin-left: 41.66666667%;*/
/*               }*/
/*               .col-md-offset-4 {*/
/*                 margin-left: 33.33333333%;*/
/*               }*/
/*               .col-md-offset-3 {*/
/*                 margin-left: 25%;*/
/*               }*/
/*               .col-md-offset-2 {*/
/*                 margin-left: 16.66666667%;*/
/*               }*/
/*               .col-md-offset-1 {*/
/*                 margin-left: 8.33333333%;*/
/*               }*/
/*               .col-md-offset-0 {*/
/*                 margin-left: 0%;*/
/*               }*/
/*             }*/
/*             @media (min-width: 1200px) {*/
/*               .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {*/
/*                 float: left;*/
/*               }*/
/*               .col-lg-12 {*/
/*                 width: 100%;*/
/*               }*/
/*               .col-lg-11 {*/
/*                 width: 91.66666667%;*/
/*               }*/
/*               .col-lg-10 {*/
/*                 width: 83.33333333%;*/
/*               }*/
/*               .col-lg-9 {*/
/*                 width: 75%;*/
/*               }*/
/*               .col-lg-8 {*/
/*                 width: 66.66666667%;*/
/*               }*/
/*               .col-lg-7 {*/
/*                 width: 58.33333333%;*/
/*               }*/
/*               .col-lg-6 {*/
/*                 width: 50%;*/
/*               }*/
/*               .col-lg-5 {*/
/*                 width: 41.66666667%;*/
/*               }*/
/*               .col-lg-4 {*/
/*                 width: 33.33333333%;*/
/*               }*/
/*               .col-lg-3 {*/
/*                 width: 25%;*/
/*               }*/
/*               .col-lg-2 {*/
/*                 width: 16.66666667%;*/
/*               }*/
/*               .col-lg-1 {*/
/*                 width: 8.33333333%;*/
/*               }*/
/*               .col-lg-pull-12 {*/
/*                 right: 100%;*/
/*               }*/
/*               .col-lg-pull-11 {*/
/*                 right: 91.66666667%;*/
/*               }*/
/*               .col-lg-pull-10 {*/
/*                 right: 83.33333333%;*/
/*               }*/
/*               .col-lg-pull-9 {*/
/*                 right: 75%;*/
/*               }*/
/*               .col-lg-pull-8 {*/
/*                 right: 66.66666667%;*/
/*               }*/
/*               .col-lg-pull-7 {*/
/*                 right: 58.33333333%;*/
/*               }*/
/*               .col-lg-pull-6 {*/
/*                 right: 50%;*/
/*               }*/
/*               .col-lg-pull-5 {*/
/*                 right: 41.66666667%;*/
/*               }*/
/*               .col-lg-pull-4 {*/
/*                 right: 33.33333333%;*/
/*               }*/
/*               .col-lg-pull-3 {*/
/*                 right: 25%;*/
/*               }*/
/*               .col-lg-pull-2 {*/
/*                 right: 16.66666667%;*/
/*               }*/
/*               .col-lg-pull-1 {*/
/*                 right: 8.33333333%;*/
/*               }*/
/*               .col-lg-pull-0 {*/
/*                 right: auto;*/
/*               }*/
/*               .col-lg-push-12 {*/
/*                 left: 100%;*/
/*               }*/
/*               .col-lg-push-11 {*/
/*                 left: 91.66666667%;*/
/*               }*/
/*               .col-lg-push-10 {*/
/*                 left: 83.33333333%;*/
/*               }*/
/*               .col-lg-push-9 {*/
/*                 left: 75%;*/
/*               }*/
/*               .col-lg-push-8 {*/
/*                 left: 66.66666667%;*/
/*               }*/
/*               .col-lg-push-7 {*/
/*                 left: 58.33333333%;*/
/*               }*/
/*               .col-lg-push-6 {*/
/*                 left: 50%;*/
/*               }*/
/*               .col-lg-push-5 {*/
/*                 left: 41.66666667%;*/
/*               }*/
/*               .col-lg-push-4 {*/
/*                 left: 33.33333333%;*/
/*               }*/
/*               .col-lg-push-3 {*/
/*                 left: 25%;*/
/*               }*/
/*               .col-lg-push-2 {*/
/*                 left: 16.66666667%;*/
/*               }*/
/*               .col-lg-push-1 {*/
/*                 left: 8.33333333%;*/
/*               }*/
/*               .col-lg-push-0 {*/
/*                 left: auto;*/
/*               }*/
/*               .col-lg-offset-12 {*/
/*                 margin-left: 100%;*/
/*               }*/
/*               .col-lg-offset-11 {*/
/*                 margin-left: 91.66666667%;*/
/*               }*/
/*               .col-lg-offset-10 {*/
/*                 margin-left: 83.33333333%;*/
/*               }*/
/*               .col-lg-offset-9 {*/
/*                 margin-left: 75%;*/
/*               }*/
/*               .col-lg-offset-8 {*/
/*                 margin-left: 66.66666667%;*/
/*               }*/
/*               .col-lg-offset-7 {*/
/*                 margin-left: 58.33333333%;*/
/*               }*/
/*               .col-lg-offset-6 {*/
/*                 margin-left: 50%;*/
/*               }*/
/*               .col-lg-offset-5 {*/
/*                 margin-left: 41.66666667%;*/
/*               }*/
/*               .col-lg-offset-4 {*/
/*                 margin-left: 33.33333333%;*/
/*               }*/
/*               .col-lg-offset-3 {*/
/*                 margin-left: 25%;*/
/*               }*/
/*               .col-lg-offset-2 {*/
/*                 margin-left: 16.66666667%;*/
/*               }*/
/*               .col-lg-offset-1 {*/
/*                 margin-left: 8.33333333%;*/
/*               }*/
/*               .col-lg-offset-0 {*/
/*                 margin-left: 0%;*/
/*               }*/
/*             }*/
/*             table {*/
/*               background-color: transparent;*/
/*             }*/
/*             caption {*/
/*               padding-top: 8px;*/
/*               padding-bottom: 8px;*/
/*               color: #777777;*/
/*               text-align: left;*/
/*             }*/
/*             th {*/
/*               text-align: left;*/
/*             }*/
/*             .table {*/
/*               width: 100%;*/
/*               max-width: 100%;*/
/*               margin-bottom: 20px;*/
/*             }*/
/*             .table > thead > tr > th,*/
/*             .table > tbody > tr > th,*/
/*             .table > tfoot > tr > th,*/
/*             .table > thead > tr > td,*/
/*             .table > tbody > tr > td,*/
/*             .table > tfoot > tr > td {*/
/*               padding: 8px;*/
/*               line-height: 1.42857143;*/
/*               vertical-align: top;*/
/*               border-top: 1px solid #dddddd;*/
/*             }*/
/*             .table > thead > tr > th {*/
/*               vertical-align: bottom;*/
/*               border-bottom: 2px solid #dddddd;*/
/*             }*/
/*             .table > caption + thead > tr:first-child > th,*/
/*             .table > colgroup + thead > tr:first-child > th,*/
/*             .table > thead:first-child > tr:first-child > th,*/
/*             .table > caption + thead > tr:first-child > td,*/
/*             .table > colgroup + thead > tr:first-child > td,*/
/*             .table > thead:first-child > tr:first-child > td {*/
/*               border-top: 0;*/
/*             }*/
/*             .table > tbody + tbody {*/
/*               border-top: 2px solid #dddddd;*/
/*             }*/
/*             .table .table {*/
/*               background-color: #ffffff;*/
/*             }*/
/*             .table-condensed > thead > tr > th,*/
/*             .table-condensed > tbody > tr > th,*/
/*             .table-condensed > tfoot > tr > th,*/
/*             .table-condensed > thead > tr > td,*/
/*             .table-condensed > tbody > tr > td,*/
/*             .table-condensed > tfoot > tr > td {*/
/*               padding: 5px;*/
/*             }*/
/*             .table-bordered {*/
/*               border: 1px solid #dddddd;*/
/*             }*/
/*             .table-bordered > thead > tr > th,*/
/*             .table-bordered > tbody > tr > th,*/
/*             .table-bordered > tfoot > tr > th,*/
/*             .table-bordered > thead > tr > td,*/
/*             .table-bordered > tbody > tr > td,*/
/*             .table-bordered > tfoot > tr > td {*/
/*               border: 1px solid #dddddd;*/
/*             }*/
/*             .table-bordered > thead > tr > th,*/
/*             .table-bordered > thead > tr > td {*/
/*               border-bottom-width: 2px;*/
/*             }*/
/*             .table-striped > tbody > tr:nth-of-type(odd) {*/
/*               background-color: #f9f9f9;*/
/*             }*/
/*             .table-hover > tbody > tr:hover {*/
/*               background-color: #f5f5f5;*/
/*             }*/
/*             table col[class*="col-"] {*/
/*               position: static;*/
/*               float: none;*/
/*               display: table-column;*/
/*             }*/
/*             table td[class*="col-"],*/
/*             table th[class*="col-"] {*/
/*               position: static;*/
/*               float: none;*/
/*               display: table-cell;*/
/*             }*/
/*             .table > thead > tr > td.active,*/
/*             .table > tbody > tr > td.active,*/
/*             .table > tfoot > tr > td.active,*/
/*             .table > thead > tr > th.active,*/
/*             .table > tbody > tr > th.active,*/
/*             .table > tfoot > tr > th.active,*/
/*             .table > thead > tr.active > td,*/
/*             .table > tbody > tr.active > td,*/
/*             .table > tfoot > tr.active > td,*/
/*             .table > thead > tr.active > th,*/
/*             .table > tbody > tr.active > th,*/
/*             .table > tfoot > tr.active > th {*/
/*               background-color: #f5f5f5;*/
/*             }*/
/*             .table-hover > tbody > tr > td.active:hover,*/
/*             .table-hover > tbody > tr > th.active:hover,*/
/*             .table-hover > tbody > tr.active:hover > td,*/
/*             .table-hover > tbody > tr:hover > .active,*/
/*             .table-hover > tbody > tr.active:hover > th {*/
/*               background-color: #e8e8e8;*/
/*             }*/
/*             .table > thead > tr > td.success,*/
/*             .table > tbody > tr > td.success,*/
/*             .table > tfoot > tr > td.success,*/
/*             .table > thead > tr > th.success,*/
/*             .table > tbody > tr > th.success,*/
/*             .table > tfoot > tr > th.success,*/
/*             .table > thead > tr.success > td,*/
/*             .table > tbody > tr.success > td,*/
/*             .table > tfoot > tr.success > td,*/
/*             .table > thead > tr.success > th,*/
/*             .table > tbody > tr.success > th,*/
/*             .table > tfoot > tr.success > th {*/
/*               background-color: #dff0d8;*/
/*             }*/
/*             .table-hover > tbody > tr > td.success:hover,*/
/*             .table-hover > tbody > tr > th.success:hover,*/
/*             .table-hover > tbody > tr.success:hover > td,*/
/*             .table-hover > tbody > tr:hover > .success,*/
/*             .table-hover > tbody > tr.success:hover > th {*/
/*               background-color: #d0e9c6;*/
/*             }*/
/*             .table > thead > tr > td.info,*/
/*             .table > tbody > tr > td.info,*/
/*             .table > tfoot > tr > td.info,*/
/*             .table > thead > tr > th.info,*/
/*             .table > tbody > tr > th.info,*/
/*             .table > tfoot > tr > th.info,*/
/*             .table > thead > tr.info > td,*/
/*             .table > tbody > tr.info > td,*/
/*             .table > tfoot > tr.info > td,*/
/*             .table > thead > tr.info > th,*/
/*             .table > tbody > tr.info > th,*/
/*             .table > tfoot > tr.info > th {*/
/*               background-color: #d9edf7;*/
/*             }*/
/*             .table-hover > tbody > tr > td.info:hover,*/
/*             .table-hover > tbody > tr > th.info:hover,*/
/*             .table-hover > tbody > tr.info:hover > td,*/
/*             .table-hover > tbody > tr:hover > .info,*/
/*             .table-hover > tbody > tr.info:hover > th {*/
/*               background-color: #c4e3f3;*/
/*             }*/
/*             .table > thead > tr > td.warning,*/
/*             .table > tbody > tr > td.warning,*/
/*             .table > tfoot > tr > td.warning,*/
/*             .table > thead > tr > th.warning,*/
/*             .table > tbody > tr > th.warning,*/
/*             .table > tfoot > tr > th.warning,*/
/*             .table > thead > tr.warning > td,*/
/*             .table > tbody > tr.warning > td,*/
/*             .table > tfoot > tr.warning > td,*/
/*             .table > thead > tr.warning > th,*/
/*             .table > tbody > tr.warning > th,*/
/*             .table > tfoot > tr.warning > th {*/
/*               background-color: #fcf8e3;*/
/*             }*/
/*             .table-hover > tbody > tr > td.warning:hover,*/
/*             .table-hover > tbody > tr > th.warning:hover,*/
/*             .table-hover > tbody > tr.warning:hover > td,*/
/*             .table-hover > tbody > tr:hover > .warning,*/
/*             .table-hover > tbody > tr.warning:hover > th {*/
/*               background-color: #faf2cc;*/
/*             }*/
/*             .table > thead > tr > td.danger,*/
/*             .table > tbody > tr > td.danger,*/
/*             .table > tfoot > tr > td.danger,*/
/*             .table > thead > tr > th.danger,*/
/*             .table > tbody > tr > th.danger,*/
/*             .table > tfoot > tr > th.danger,*/
/*             .table > thead > tr.danger > td,*/
/*             .table > tbody > tr.danger > td,*/
/*             .table > tfoot > tr.danger > td,*/
/*             .table > thead > tr.danger > th,*/
/*             .table > tbody > tr.danger > th,*/
/*             .table > tfoot > tr.danger > th {*/
/*               background-color: #f2dede;*/
/*             }*/
/*             .table-hover > tbody > tr > td.danger:hover,*/
/*             .table-hover > tbody > tr > th.danger:hover,*/
/*             .table-hover > tbody > tr.danger:hover > td,*/
/*             .table-hover > tbody > tr:hover > .danger,*/
/*             .table-hover > tbody > tr.danger:hover > th {*/
/*               background-color: #ebcccc;*/
/*             }*/
/*             .table-responsive {*/
/*               overflow-x: auto;*/
/*               min-height: 0.01%;*/
/*             }*/
/*             @media screen and (max-width: 767px) {*/
/*               .table-responsive {*/
/*                 width: 100%;*/
/*                 margin-bottom: 15px;*/
/*                 overflow-y: hidden;*/
/*                 -ms-overflow-style: -ms-autohiding-scrollbar;*/
/*                 border: 1px solid #dddddd;*/
/*               }*/
/*               .table-responsive > .table {*/
/*                 margin-bottom: 0;*/
/*               }*/
/*               .table-responsive > .table > thead > tr > th,*/
/*               .table-responsive > .table > tbody > tr > th,*/
/*               .table-responsive > .table > tfoot > tr > th,*/
/*               .table-responsive > .table > thead > tr > td,*/
/*               .table-responsive > .table > tbody > tr > td,*/
/*               .table-responsive > .table > tfoot > tr > td {*/
/*                 white-space: nowrap;*/
/*               }*/
/*               .table-responsive > .table-bordered {*/
/*                 border: 0;*/
/*               }*/
/*               .table-responsive > .table-bordered > thead > tr > th:first-child,*/
/*               .table-responsive > .table-bordered > tbody > tr > th:first-child,*/
/*               .table-responsive > .table-bordered > tfoot > tr > th:first-child,*/
/*               .table-responsive > .table-bordered > thead > tr > td:first-child,*/
/*               .table-responsive > .table-bordered > tbody > tr > td:first-child,*/
/*               .table-responsive > .table-bordered > tfoot > tr > td:first-child {*/
/*                 border-left: 0;*/
/*               }*/
/*               .table-responsive > .table-bordered > thead > tr > th:last-child,*/
/*               .table-responsive > .table-bordered > tbody > tr > th:last-child,*/
/*               .table-responsive > .table-bordered > tfoot > tr > th:last-child,*/
/*               .table-responsive > .table-bordered > thead > tr > td:last-child,*/
/*               .table-responsive > .table-bordered > tbody > tr > td:last-child,*/
/*               .table-responsive > .table-bordered > tfoot > tr > td:last-child {*/
/*                 border-right: 0;*/
/*               }*/
/*               .table-responsive > .table-bordered > tbody > tr:last-child > th,*/
/*               .table-responsive > .table-bordered > tfoot > tr:last-child > th,*/
/*               .table-responsive > .table-bordered > tbody > tr:last-child > td,*/
/*               .table-responsive > .table-bordered > tfoot > tr:last-child > td {*/
/*                 border-bottom: 0;*/
/*               }*/
/*             }*/
/*             .clearfix:before,*/
/*             .clearfix:after,*/
/*             .dl-horizontal dd:before,*/
/*             .dl-horizontal dd:after,*/
/*             .container:before,*/
/*             .container:after,*/
/*             .container-fluid:before,*/
/*             .container-fluid:after,*/
/*             .row:before,*/
/*             .row:after {*/
/*               content: " ";*/
/*               display: table;*/
/*             }*/
/*             .clearfix:after,*/
/*             .dl-horizontal dd:after,*/
/*             .container:after,*/
/*             .container-fluid:after,*/
/*             .row:after {*/
/*               clear: both;*/
/*             }*/
/*             .center-block {*/
/*               display: block;*/
/*               margin-left: auto;*/
/*               margin-right: auto;*/
/*             }*/
/*             .pull-right {*/
/*               float: right !important;*/
/*             }*/
/*             .pull-left {*/
/*               float: left !important;*/
/*             }*/
/*             .hide {*/
/*               display: none !important;*/
/*             }*/
/*             .show {*/
/*               display: block !important;*/
/*             }*/
/*             .invisible {*/
/*               visibility: hidden;*/
/*             }*/
/*             .text-hide {*/
/*               font: 0/0 a;*/
/*               color: transparent;*/
/*               text-shadow: none;*/
/*               background-color: transparent;*/
/*               border: 0;*/
/*             }*/
/*             .hidden {*/
/*               display: none !important;*/
/*             }*/
/*             .affix {*/
/*               position: fixed;*/
/*             }*/
/*             @-ms-viewport {*/
/*               width: device-width;*/
/*             }*/
/*             .visible-xs,*/
/*             .visible-sm,*/
/*             .visible-md,*/
/*             .visible-lg {*/
/*               display: none !important;*/
/*             }*/
/*             .visible-xs-block,*/
/*             .visible-xs-inline,*/
/*             .visible-xs-inline-block,*/
/*             .visible-sm-block,*/
/*             .visible-sm-inline,*/
/*             .visible-sm-inline-block,*/
/*             .visible-md-block,*/
/*             .visible-md-inline,*/
/*             .visible-md-inline-block,*/
/*             .visible-lg-block,*/
/*             .visible-lg-inline,*/
/*             .visible-lg-inline-block {*/
/*               display: none !important;*/
/*             }*/
/*             @media (max-width: 767px) {*/
/*               .visible-xs {*/
/*                 display: block !important;*/
/*               }*/
/*               table.visible-xs {*/
/*                 display: table !important;*/
/*               }*/
/*               tr.visible-xs {*/
/*                 display: table-row !important;*/
/*               }*/
/*               th.visible-xs,*/
/*               td.visible-xs {*/
/*                 display: table-cell !important;*/
/*               }*/
/*             }*/
/*             @media (max-width: 767px) {*/
/*               .visible-xs-block {*/
/*                 display: block !important;*/
/*               }*/
/*             }*/
/*             @media (max-width: 767px) {*/
/*               .visible-xs-inline {*/
/*                 display: inline !important;*/
/*               }*/
/*             }*/
/*             @media (max-width: 767px) {*/
/*               .visible-xs-inline-block {*/
/*                 display: inline-block !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 768px) and (max-width: 991px) {*/
/*               .visible-sm {*/
/*                 display: block !important;*/
/*               }*/
/*               table.visible-sm {*/
/*                 display: table !important;*/
/*               }*/
/*               tr.visible-sm {*/
/*                 display: table-row !important;*/
/*               }*/
/*               th.visible-sm,*/
/*               td.visible-sm {*/
/*                 display: table-cell !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 768px) and (max-width: 991px) {*/
/*               .visible-sm-block {*/
/*                 display: block !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 768px) and (max-width: 991px) {*/
/*               .visible-sm-inline {*/
/*                 display: inline !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 768px) and (max-width: 991px) {*/
/*               .visible-sm-inline-block {*/
/*                 display: inline-block !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 992px) and (max-width: 1199px) {*/
/*               .visible-md {*/
/*                 display: block !important;*/
/*               }*/
/*               table.visible-md {*/
/*                 display: table !important;*/
/*               }*/
/*               tr.visible-md {*/
/*                 display: table-row !important;*/
/*               }*/
/*               th.visible-md,*/
/*               td.visible-md {*/
/*                 display: table-cell !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 992px) and (max-width: 1199px) {*/
/*               .visible-md-block {*/
/*                 display: block !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 992px) and (max-width: 1199px) {*/
/*               .visible-md-inline {*/
/*                 display: inline !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 992px) and (max-width: 1199px) {*/
/*               .visible-md-inline-block {*/
/*                 display: inline-block !important;*/
/*               }*/
/*             }*/
/*             @media (min-width: 1200px) {*/
/*               .visible-lg {*/
/*                 display: block !important;*/
/*               }*/
/*               table.visible-lg {*/
/*                 display: table !important;*/
/*               }*/
/*               tr.visible-lg {*/
/*                 display: table-row !important;*/
/*               }*/
/*               th.visible-lg,*/
/*               td.visible-lg {*/
/*                 display: table-cell !important;*/
/*               }*/
/*             }*/
/*             h1{*/
/*                 text-align: center;*/
/*                 margin-bottom: 40px;*/
/*             }*/
/* */
/*             .show-amount{*/
/*                 margin-top: -20px;*/
/*             }*/
/* */
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             {% block body %}*/
/*                 <h1>Invoice</h1>*/
/* */
/*                 <table class="table table-bordered table-striped table-hover">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <th>Id</th>*/
/*                             <td>{{ invoice.id }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Invoice Number</th>*/
/*                             <td>{{ invoice.number }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Address</th>*/
/*                             <td>{{ invoice.address }}</td>*/
/*                         </tr>*/
/* */
/*                         <tr>*/
/*                             <th>Email</th>*/
/*                             <td>{{ invoice.email }}</td>*/
/*                         </tr>*/
/* */
/*                         <tr>*/
/*                             <th>Date</th>*/
/*                             <td>{% if invoice.date %}{{ invoice.date|date('Y-m-d') }}{% endif %}</td>*/
/*                         </tr>*/
/* */
/* */
/*                             <tr>*/
/*                                 <th>Products</th>*/
/* */
/*                                     <td>*/
/*                                         <ul class="list-unstyled row">*/
/*                                             {% set amount = 0 %}*/
/*                                             {% for product in invoice.products %}*/
/* */
/*                                                 <li>*/
/*                                                     <div class="col-xs-8">*/
/*                                                         {{ product.description }}*/
/*                                                     </div>*/
/* */
/*                                                     <div class="col-xs-3 pull-right show-amount">*/
/*                                                         - {{ product.amount }}$*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 {% set amount = (amount + product.amount) %}*/
/*                                             {% endfor %}*/
/* */
/*                                             <li>*/
/*                                                 <div class="clearfix"></div>*/
/* */
/*                                                 <div class="h4 col-xs-9">*/
/*                                                     Total*/
/*                                                 </div>*/
/* */
/*                                                 <div class="h4 col-xs-3 pull-right show-amount">*/
/*                                                     - {{ amount }}$*/
/*                                                 </div>*/
/*                                             </li>*/
/* */
/*                                         </ul>*/
/*                                     </td>*/
/*                             </tr>*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
