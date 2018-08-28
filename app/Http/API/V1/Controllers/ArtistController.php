<?php
namespace App\Http\API\V1\Controllers;

use Illuminate\Http\Request;

use App\Domains\Artist\Artist;
use App\Http\API\ApiController;
use App\Domains\Artist\Repository\ArtistRepository;

class ArtistController extends ApiController
{
    /**
     * @var ArtistRepository
     * 
     */
    protected $artistRepository;

    /**
     * AristController constructor
     * 
     * @param ArtistRepository  $artistRepository
     */
    public function __construct(ArtistRepository $artistRepository) {
        $this->artistRepository = $artistRepository;
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $artists = $this->artistRepository->listArtists();
        return $this->respondWithSuccess($artists);
    }

    /**
     * @param int   $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        $artist = $this->artistRepository->findArtistById($id);
        return $this->respondWithSuccess($artist);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $artist = $this->artistRepository->createArtist($request->input());
            return $this->respondCreated([
                'id' => $artist->id,
                'location' => env('APP_URL') . '/api/' . env('APP_API_VERSION') . '/artists/' . $artist->id
            ]);
        } catch (\Exception $e) {
            return $this->respondUnprocessableEntity();
        }
    }

    /**
     * @param Request   $request
     * @param Artist    $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist) {
        try {
            $artistRepository = new ArtistRepository($artist);
            $updated = $artistRepository->updateArtist($request->input());
            return $this->respondNoContent();
        } catch (\Exception $e) {
            return $this->respondUnprocessableEntity();
        }
    }

    /**
     * @param Request   $request
     * @param Artist    $artist
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, Artist $artist) {
        try {
            $artistRepository = new ArtistRepository($artist);
            $deleted = $artistRepository->deleteArtist($request->input());
            return $this->respondNoContent();
        } catch (\Exception $e) {
            return $this->respondUnprocessableEntity();
        }
    }
}
