<?php
 public function testShowingUsingAt()
 {
 $foo = $this->getMockBuilder('Foo')->getMock();
 $foo->expects($this->at(0))
 ->method('bar')
	 ->will($this->returnValue(0));
 $foo->expects($this->at(1))
	 ->method('bar')
	 ->will($this->returnValue(1));
 $foo->expects($this->at(2))
	 ->method('bar')
	 ->will($this->returnValue(2));
 $this->assertEquals(0, $foo->bar());
 $this->assertEquals(1, $foo->bar());
 $this->assertEquals(2, $foo->bar());
 }
