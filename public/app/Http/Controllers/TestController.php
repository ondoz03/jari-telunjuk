<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BukuController;
use App\Models\Buku;
use App\Models\Peminjaman;
use BendeckDavid\GraphqlClient\Facades\GraphQL;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        $data=  GraphQL::query('
            posts(first:3) {
                nodes {
                  date
                  id
                  slug
                  title
                  excerpt
                  featuredImage {
                    node {
                      mediaDetails {
                        file
                        height
                        sizes {
                          sourceUrl
                          height
                          width
                        }
                      }
                    }
                  }
                  categories {
                    nodes {
                      id
                      name
                      slug
                      uri
                      link
                    }
                    pageInfo {
                      hasNextPage
                      hasPreviousPage
                      endCursor
                      startCursor
                    }
                  }
                }
             }
        ')->get();

        return $data['posts']['nodes'];
        //->get('json'); //get response as json object
    }
}
