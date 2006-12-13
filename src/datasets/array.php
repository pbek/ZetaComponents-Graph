<?php
/**
 * File containing the ezcGraphArrayDataSet class
 *
 * @package Graph
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Dataset class which receives arrays and use them as a base for datasets.
 *
 * @package Graph
 * @mainclass
 */
class ezcGraphArrayDataSet extends ezcGraphDataSet
{
    /**
     * Constructor
     * 
     * @param array $options Default option array
     * @return void
     * @ignore
     */
    public function __construct( $data )
    {
        $this->createFromArray( $data );
        parent::__construct();
    }

    /**
     * setData 
     * 
     * @param array $data 
     * @access public
     * @return void
     */
    protected function createFromArray( $data = array() ) 
    {
        foreach ( $data as $key => $value )
        {
            $this->data[$key] = $value;
        }
    }

    /**
     * Returns the number of elements in this dataset
     * 
     * @return int
     */
    public function count()
    {
        return count( $this->data );
    }
}

?>
