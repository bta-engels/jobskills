<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;

/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $birthdate
 * @property string|null $street
 * @property string|null $city
 * @property string|null $postcode
 * @property string|null $img
 * @property string|null $phone
 * @property string|null $about_me
 * @property int $confirmed
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static Builder|Customer newModelQuery()
 * @method static Builder|Customer newQuery()
 * @method static Builder|Customer query()
 * @method static Builder|Customer whereAboutMe($value)
 * @method static Builder|Customer whereBirthdate($value)
 * @method static Builder|Customer whereCity($value)
 * @method static Builder|Customer whereConfirmed($value)
 * @method static Builder|Customer whereCreatedAt($value)
 * @method static Builder|Customer whereEmail($value)
 * @method static Builder|Customer whereId($value)
 * @method static Builder|Customer whereImg($value)
 * @method static Builder|Customer whereName($value)
 * @method static Builder|Customer wherePassword($value)
 * @method static Builder|Customer wherePhone($value)
 * @method static Builder|Customer wherePostcode($value)
 * @method static Builder|Customer whereRememberToken($value)
 * @method static Builder|Customer whereStreet($value)
 * @method static Builder|Customer whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read Cv|null $cv
 * @property-read Collection|CustomerEducation[] $educations
 * @property-read int|null $educations_count
 * @property-read Collection|Language[] $languages
 * @property-read int|null $languages_count
 * @property-read Collection|CustomerLanguage[] $languageLevels
 * @property-read int|null $language_levels_count
 * @property-read Collection|CustomerProgrammingLanguage[] $programmingLanguageLevels
 * @property-read int|null $programming_language_levels_count
 * @property-read Collection|ProgrammingLanguage[] $programmingLanguages
 * @property-read int|null $programming_languages_count
 * @property-read Collection|CustomerFramework[] $frameworkLevels
 * @property-read int|null $framework_levels_count
 * @property-read Collection|Framework[] $frameworks
 * @property-read int|null $frameworks_count
 * @property-read Collection|CustomerHardSkill[] $hardSkills
 * @property-read int|null $hard_skills_count
 * @property-read Collection|CustomerProject[] $projects
 * @property-read int|null $projects_count
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 */
class Customer extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    public $timestamps = true;
    protected $guarded = ['id'];
    protected $casts = [
        'confirmed' => 'bool',
        'birthday'  => 'date:Y-m-d',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function cv()
    {
        return $this->hasOne(Cv::class);
    }

    public function educations()
    {
        return $this->hasMany(CustomerEducation::class);
    }

    public function projects()
    {
        return $this->hasMany(CustomerProject::class);
    }

    public function hardSkills()
    {
        return $this->hasMany(CustomerHardSkill::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'customer_languages');
    }

    public function languageLevels()
    {
        return $this->hasMany(CustomerLanguage::class);
    }

    public function programmingLanguages()
    {
        return $this->belongsToMany(ProgrammingLanguage::class, 'customer_programming_languages');
    }

    public function programmingLanguageLevels()
    {
        return $this->hasMany(CustomerProgrammingLanguage::class);
    }

    public function frameworks()
    {
        return $this->belongsToMany(Framework::class, 'customer_frameworks');
    }

    public function frameworkLevels()
    {
        return $this->hasMany(CustomerFramework::class);
    }
}
