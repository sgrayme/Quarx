<?php

namespace Yab\Quarx\Repositories;

use Yab\Quarx\Models\Menu;
use Illuminate\Support\Facades\Schema;

class MenuRepository
{

    /**
     * Returns all Menus
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Menu::orderBy('created_at', 'desc')->get();
    }

    /**
     * Returns all paginated Menus
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function paginated()
    {
        return Menu::orderBy('created_at', 'desc')->paginate(25);
    }

    /**
     * Search Menu
     *
     * @param string $input
     *
     * @return Menu
     */
    public function search($input)
    {
        $query = Menu::orderBy('created_at', 'desc');

        $columns = Schema::getColumnListing('menus');

        foreach ($columns as $attribute) {
            $query->orWhere($attribute, 'LIKE', '%'.$input['term'].'%');
        };

        return [$query, $input['term'], $query->paginate(25)->render()];

    }

    /**
     * Stores Menu into database
     *
     * @param array $input
     *
     * @return Menu
     */
    public function store($input)
    {
        return Menu::create($input);
    }

    /**
     * Find Menu by given id
     *
     * @param int $id
     *
     * @return \Illuminate\Support\Collection|null|static|Menu
     */
    public function findMenuById($id)
    {
        return Menu::find($id);
    }

    /**
     * Find Menu by given uuid
     *
     * @param int $id
     *
     * @return \Illuminate\Support\Collection|null|static|Menu
     */
    public static function getMenuByUUID($id)
    {
        return Menu::where('uuid', $id)->get();
    }

    /**
     * Updates Menu into database
     *
     * @param Menu $menu
     * @param array $input
     *
     * @return Menu
     */
    public function update($menu, $input)
    {
        $menu->fill($input);
        $menu->save();

        return $menu;
    }
}