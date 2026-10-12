<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CountiesController;
use App\Http\Controllers\CitiesController;

/**
 * =========================
 * API ERROR DEFINITIONS
 * =========================
 */

/**
 * @apiDefine BadRequestError
 * @apiError (400) BadRequest Hibás kérés
 *
 * @apiErrorExample {json} 400 Bad Request
 *     {
 *       "message": "Hibás kérés"
 *     }
 */

/**
 * @apiDefine NotFoundError
 * @apiError (404) NotFound Az erőforrás nem található
 *
 * @apiErrorExample {json} 404 Not Found
 *     {
 *       "message": "Nem található"
 *     }
 */

/**
 * @apiDefine UnauthorizedError
 * @apiError (401) Unauthorized Nincs hitelesítve
 *
 * @apiErrorExample {json} 401 Unauthorized
 *     {
 *       "message": "Unauthenticated."
 *     }
 */

/**
 * =========================
 * USERS
 * =========================
 */

/**
 * @api {get} /users Felhasználók listázása
 * @apiName GetUsers
 * @apiGroup Users
 * @apiVersion 1.0.0
 *
 * @apiHeader {String} Authorization Bearer token
 * @apiHeaderExample {json} Authorization:
 *     {
 *       "Authorization": "Bearer YOUR_TOKEN"
 *     }
 *
 * @apiSuccess {Object[]} users Felhasználók listája
 *
 * @apiUse UnauthorizedError
 * @apiUse BadRequestError
 */
Route::get('/users', [UsersController::class, 'index'])
    ->middleware('auth:sanctum');

/**
 * @api {post} /users/login Bejelentkezés
 * @apiName LoginUser
 * @apiGroup Users
 * @apiVersion 1.0.0
 *
 * @apiBody {String} email Felhasználó e-mail címe
 * @apiBody {String} password Felhasználó jelszava
 *
 * @apiSuccess {String} token Hitelesítési token
 * @apiSuccess {Object} user Bejelentkezett felhasználó
 *
 * @apiError (401) InvalidCredentials Hibás e-mail vagy jelszó
 */
Route::post('/users/login', [UsersController::class, 'login']);

/**
 * @api {get} /user Aktuális felhasználó lekérése
 * @apiName GetAuthenticatedUser
 * @apiGroup Users
 * @apiVersion 1.0.0
 *
 * @apiHeader {String} Authorization Bearer token
 *
 * @apiSuccess {Object} user Aktuális felhasználó
 *
 * @apiUse UnauthorizedError
 */
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/**
 * =========================
 * COUNTIES - GET
 * =========================
 */

/**
 * @api {get} /counties Megyék listázása
 * @apiName GetCounties
 * @apiGroup Counties
 * @apiVersion 1.0.0
 *
 * @apiSuccess {Object[]} counties Megyék listája
 *
 * @apiUse BadRequestError
 */
Route::get('/counties', [CountiesController::class, 'index']);

/**
 * @api {get} /counties/:id Egy megye lekérése
 * @apiName GetCounty
 * @apiGroup Counties
 * @apiVersion 1.0.0
 *
 * @apiParam {Number} id A megye azonosítója
 *
 * @apiSuccess {Number} id A megye azonosítója
 * @apiSuccess {String} name A megye neve
 *
 * @apiUse BadRequestError
 * @apiUse NotFoundError
 */
Route::get('/counties/{id}', [CountiesController::class, 'show']);


/**
 * =========================
 * CITIES - GET
 * =========================
 */

/**
 * @api {get} /cities Városok listázása
 * @apiName GetCities
 * @apiGroup Cities
 * @apiVersion 1.0.0
 *
 * @apiSuccess {Object[]} cities Városok listája
 *
 * @apiUse BadRequestError
 */
Route::get('/cities', [CitiesController::class, 'index']);

/**
 * @api {get} /cities/search Városok keresése
 * @apiName SearchCities
 * @apiGroup Cities
 * @apiVersion 1.0.0
 *
 * @apiQuery {String} name Keresett város neve
 *
 * @apiSuccess {Object[]} cities Találatok
 *
 * @apiUse BadRequestError
 */
Route::get('/cities/search', [CitiesController::class, 'search']);

/**
 * @api {get} /cities/:id Egy város lekérése
 * @apiName GetCity
 * @apiGroup Cities
 * @apiVersion 1.0.0
 *
 * @apiParam {Number} id A város azonosítója
 *
 * @apiSuccess {Number} id A város azonosítója
 * @apiSuccess {String} name A város neve
 *
 * @apiUse BadRequestError
 * @apiUse NotFoundError
 */
Route::get('/cities/{id}', [CitiesController::class, 'show']);


/**
 * =========================
 * COUNTIES - WRITE
 * =========================
 */

Route::middleware('auth:sanctum')->group(function () {

    /**
     * @api {post} /counties Megye létrehozása
     * @apiName CreateCounty
     * @apiGroup Counties
     * @apiVersion 1.0.0
     *
     * @apiHeader {String} Authorization Bearer token
     * @apiBody {String} name A megye neve
     *
     * @apiSuccess {Object} county A létrehozott megye
     *
     * @apiUse UnauthorizedError
     * @apiUse BadRequestError
     */
    Route::post('/counties', [CountiesController::class, 'store']);

    /**
     * @api {put} /counties/:id Megye módosítása
     * @apiName UpdateCounty
     * @apiGroup Counties
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id A megye azonosítója
     * @apiBody {String} name A megye új neve
     *
     * @apiUse UnauthorizedError
     * @apiUse BadRequestError
     * @apiUse NotFoundError
     */
    Route::put('/counties/{id}', [CountiesController::class, 'update']);

    /**
     * @api {delete} /counties/:id Megye törlése
     * @apiName DeleteCounty
     * @apiGroup Counties
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id A megye azonosítója
     *
     * @apiUse UnauthorizedError
     * @apiUse BadRequestError
     * @apiUse NotFoundError
     */
    Route::delete('/counties/{id}', [CountiesController::class, 'destroy']);


    /**
     * =========================
     * CITIES - WRITE
     * =========================
     */

    /**
     * @api {post} /cities Város létrehozása
     * @apiName CreateCity
     * @apiGroup Cities
     * @apiVersion 1.0.0
     *
     * @apiHeader {String} Authorization Bearer token
     * @apiBody {String} name A város neve
     * @apiBody {Number} county_id A megye azonosítója
     *
     * @apiSuccess {Object} city A létrehozott város
     *
     * @apiUse UnauthorizedError
     * @apiUse BadRequestError
     */
    Route::post('/cities', [CitiesController::class, 'store']);

    /**
     * @api {put} /cities/:id Város módosítása
     * @apiName UpdateCity
     * @apiGroup Cities
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id A város azonosítója
     * @apiBody {String} name A város új neve
     * @apiBody {Number} county_id A megye azonosítója
     *
     * @apiUse UnauthorizedError
     * @apiUse BadRequestError
     * @apiUse NotFoundError
     */
    Route::put('/cities/{id}', [CitiesController::class, 'update']);

    /**
     * @api {delete} /cities/:id Város törlése
     * @apiName DeleteCity
     * @apiGroup Cities
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id A város azonosítója
     *
     * @apiUse UnauthorizedError
     * @apiUse BadRequestError
     * @apiUse NotFoundError
     */
    Route::delete('/cities/{id}', [CitiesController::class, 'destroy']);
});