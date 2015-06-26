<?php

/**
 * @author: Tien Nguyen
 * @version: $Id: ActNewsController.php,v 1.0 2015/06/27 01:44 htien Exp $
 */

namespace NhaThieuNhi\Http\Controllers;

use NhaThieuNhi\Post;

class ActNewsController extends Controller
{
  public function index()
  {
    $actNews = Post::where([
      'post_type'   => 'act_news',
      'post_status' => 'publish'
    ])
                   ->orderBy('id', 'DESC')
                   ->get();

    return view('actnews.index', compact('actNews'));
  }
}