<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Home Page</title>
    <style>
      .myGrid {
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: minmax(60px, 150px);
        grid-template-areas:
          "h1 . nav nav"
          "bar bar bar bar"
        }
        h1 {
          font-family: "Quintessential", cursive;
          font-size: 50px;
          color: white;
          margin-block-start: 0px;
          margin-block-end: 0px;
          margin-top: auto;
          grid-area: h1;
        }
        body {
          background-color: black;
          margin: 0px;
        }
        ul li a {
          color: white;
          text-decoration: none;
          font-size: 25px;
        }
        .portNavBar {
          grid-area: nav;
          margin-top: auto;
        }
        .portNavBar ul {
          list-style-type: none;
          display: flex;
          flex-direction: row;
          padding-inline-start: 0px;
        }
        .portNavBar ul li {
          text-align: center;
          flex: 1;
        }
        #bar {
          background: green;
          display: block;
          width: 100%;
          height: 15px;
          grid-area: bar;
        }
    </style>
    <?php wp_head(); ?>
  </head>
  <body class="myGrid" <?php body_class(); ?>>
