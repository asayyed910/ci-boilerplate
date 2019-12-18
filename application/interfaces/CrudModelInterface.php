<?php
interface CrudModelInterface
{
	public function create();
    
    public function store();
    
    public function show($id);
    
    public function update();

    public function destroy($id);

    public function printing();

}
