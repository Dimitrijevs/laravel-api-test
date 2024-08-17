<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *    path="/api/posts",
 *    summary="Create a post",
 *    tags={"Post"},
 * 
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                @OA\Schema(
 *                    @OA\Property(
 *                        property="title",
 *                        type="string",
 *                        example="Post title"
 *                    ),
 *                    @OA\Property(
 *                        property="likes",
 *                        type="integer",
 *                        example=37
 *                    ),
 *                ),
 *            },
 *        ),
 *    ),
 * 
 *    @OA\Response(
 *        response=200,
 *        description="Post created successfully",
 * ),
 * ),
 * 
 *  
 */
class PostController extends Controller {}
