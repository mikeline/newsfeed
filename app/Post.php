<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="Post",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="desc",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="content",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="date_created",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="news_users_id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="photo",
 *      type="string"
 *  ),
 * )
 */

class Post extends Model
{

}
