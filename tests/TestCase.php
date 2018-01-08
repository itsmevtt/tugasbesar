<?php


use PHPUnit\DbUnit\TestCaseTrait;

class DataSetFilterTest extends PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testIncludeFilteredusers()
    {
        $tableNames = ['users'];
        $dataSet = $this->getConnection()->createDataSet();

        $filterDataSet = new PHPUnit_Extensions_Database_DataSet_DataSetFilter($dataSet);
        $filterDataSet->addIncludeTables(['users']);
        $filterDataSet->setIncludeColumnsForTable('users', ['id', 'content']);
        // ..
    }

    public function testExcludeFilteredusers()
    {
        $tableNames = ['users'];
        $dataSet = $this->getConnection()->createDataSet();

        $filterDataSet = new PHPUnit_Extensions_Database_DataSet_DataSetFilter($dataSet);
        $filterDataSet->addExcludeTables(['foo', 'bar', 'baz']); // only keep the users table!
        $filterDataSet->setExcludeColumnsForTable('users', ['user', 'created']);
        // ..
    }
}
?>