

select category.Name as name, count(item.Id) as total from category left join item_category_relations on item_category_relations.categoryId=category.Id left join item on item.Number=item_category_relations.ItemNumber group by category.Id order by total desc


select category.Id, category.Name,catetory_relations.ParentcategoryId,count(item.Id) from category
left join item_category_relations on item_category_relations.categoryId=category.Id
left join item on item.Number=item_category_relations.ItemNumber
left join catetory_relations on catetory_relations.categoryId=category.Id
group by category.Id


"SELECT category.Name, count(item.Number) as item_number FROM category join item_category_relations on category.Id = item_category_relations.categoryId join item on item_category_relations.ItemNumber=item.Number group by category.Name order by item_number desc"



	public function buildTree($items) {
    $children = [];
    foreach($items as &$item) {
      $children[$item->parent][] = $item;
      unset($item);
    }
    foreach($items as $item) {
      if(isset($children[$item->id])) {
        $item->children = $children[$item->id];
      }
    }
    return $children[0];
  }



select when t4 t1.Name,t2.Name,t3.Name,t4.Name from (select category.Id, category.Name, catetory_relations.ParentcategoryId from category 

left join catetory_relations on category.Id=categoryId) t1 left join (select category.Id, category.Name, catetory_relations.ParentcategoryId from category 
left join catetory_relations on category.Id=categoryId) 


t2 on t2.ParentcategoryId=t1.Id left join (select category.Id, category.Name, catetory_relations.ParentcategoryId from category 
left join catetory_relations on category.Id=categoryId) t3 on t3.ParentcategoryId=t2.Id left join (select category.Id, category.Name, catetory_relations.ParentcategoryId from category left join catetory_relations on category.Id=categoryId) t4 on t4.ParentcategoryId=t3.Id



select a.Name,count(b.categoryId) as item from category a join item_category_relations b on a.Id = b.categoryId join item c on b.ItemNumber=c.Number group by b.categoryId order by c.Id






select * from item_category_relations where categoryId=11




