<?php
namespace App\Http\API\V1\Controllers;

use Illuminate\Http\Request;

use App\Domains\Artist\Artist;
use App\Http\Controllers\Controller;
use App\Domains\Artist\Repository\ArtistRepository;

class ArtistController extends Controller
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
        return response()->json($artists);
    }

    /**
     * @param int   $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        $artists = $this->artistRepository->findArtistById($id);
        return response()->json($artists);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $artist = $this->artistRepository->createArtist($request->input());

            return response()->json([
                'id' => $artist->id,
                'location' => env('APP_URL') . '/api/v1/artists/' . $artist->id
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Could not create new artist',
                'status_code' => 422,
                'errors' => [
                    get_class($e) => $e->getMessage()
                ]
            ], 422);
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

            return response()->json([
                'id' => $artist->id,
                'location' => env('APP_URL') . '/api/v1/artists/' . $artist->id
            ], 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Could not update artist',
                'status_code' => 428,
                'errors' => [
                    get_class($e) => $e->getMessage()
                ]
            ], 422);
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

            return response()->json([], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Could not delete artist',
                'status_code' => 404,
                'errors' => [
                    get_class($e) => $e->getMessage()
                ]
            ], 422);
        }
    }
}
