<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Ajax as Aconfig;
use App\Models\Team;

class Ajax extends BaseController
{
    var $ajaxConfig;
    var $perPage;
    var $perPageScroll;
    var $team;

    public function __construct()
    {
        $this->ajaxConfig = new Aconfig();
        $this->perPage = $this->ajaxConfig->perPage;
        $this->perPageScroll = $this->ajaxConfig->perPageScroll;
        $this->team = new Team();
    }
    /**
     * stránkování klasické s využitím jen php
     */
    public function index()
    {
        $data["teams"] = $this->team->orderBy('general_name', 'asc')->paginate($this->perPage);
        $data['pager'] = $this->team->pager;
        $data['perPage'] = $this->perPage;
        $data["page"] = $this->team->pager->getCurrentPage();
        $data['title'] = "Seznam týmů";
        echo view('teamList', $data);
    }
    /**
     * stránkování s využitím php, jQuery a Ajaxu
     */
    public function index2()
    {
        $data["teams"] =  $this->team->orderBy('general_name', 'asc')->paginate($this->perPage);
        $data['pager'] = $this->team->pager;
        $data['perPage'] = $this->perPage;
        $data["page"] = $this->team->pager->getCurrentPage();
        $data['title'] = "Seznam týmů2";
        echo view('teamList2', $data);
    }

    public function ajax2($page)
    {

        $data["page"] = $page++;
        $data['perPage'] = $this->perPage;
        $data["teams"] = $this->team->orderBy('general_name', 'asc')->findAll($this->perPage, ($page - 1) * $this->perPage);
        $data["totalPages"] = ceil($this->team->countAllResults() / $this->perPage) - 1;
        echo view('ajax2', $data);
    }
    /**
     * stránkován ís využitím php, jQuery a Ajaxu, nekonečné scrollování
     */
    public function index3()
    {
        $data["teams"] =  $this->team->orderBy('general_name', 'asc')->paginate($this->perPageScroll);
        $data['pager'] = $this->team->pager;
        $data['perPage'] = $this->perPage;
        $data["page"] = $this->team->pager->getCurrentPage();
        $data['title'] = "Seznam týmů3";
        echo view('teamList3', $data);
    }

    public function ajax3($page)
    {
        $data["page"] = $page++;
        $data['perPage'] = $this->perPageScroll;
        $data["teams"] = $this->team->orderBy('general_name', 'asc')->findAll($this->perPageScroll, ($page - 1) * $this->perPageScroll);
        $data["totalPages"] = ceil($this->team->countAllResults() / $this->perPageScroll) - 1;
        echo view('ajax3', $data);
    }
}
