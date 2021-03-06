
<?php
$xmlstr = <<<XML
<?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="pdml2html.xsl"?>
<!-- You can find pdml2html.xsl in /usr/share/wireshark or at http://anonsvn.wireshark.org/trunk/wireshark/pdml2html.xsl. -->
<pdml version="0" creator="wireshark/1.10.2" time="Thu Dec  4 22:53:20 2014" capture_file="out.pcap">
<packet>
  <proto name="geninfo" pos="0" showname="General information" size="188">
    <field name="num" pos="0" show="1" showname="Number" value="1" size="188"/>
    <field name="len" pos="0" show="188" showname="Frame Length" value="bc" size="188"/>
    <field name="caplen" pos="0" show="188" showname="Captured Length" value="bc" size="188"/>
    <field name="timestamp" pos="0" show="Dec  4, 2014 22:47:12.000000000 IST" showname="Captured Time" value="1417713432.000000000" size="188"/>
  </proto>
  <proto name="frame" showname="Frame 1: 188 bytes on wire (1504 bits), 188 bytes captured (1504 bits)" size="188" pos="0">
    <field name="frame.encap_type" showname="Encapsulation type: SS7 MTP3 (43)" size="0" pos="0" show="43"/>
    <field name="frame.time" showname="Arrival Time: Dec  4, 2014 22:47:12.000000000 IST" size="0" pos="0" show="Dec  4, 2014 22:47:12.000000000"/>
    <field name="frame.offset_shift" showname="Time shift for this packet: 0.000000000 seconds" size="0" pos="0" show="0.000000000"/>
    <field name="frame.time_epoch" showname="Epoch Time: 1417713432.000000000 seconds" size="0" pos="0" show="1417713432.000000000"/>
    <field name="frame.time_delta" showname="Time delta from previous captured frame: 0.000000000 seconds" size="0" pos="0" show="0.000000000"/>
    <field name="frame.time_delta_displayed" showname="Time delta from previous displayed frame: 0.000000000 seconds" size="0" pos="0" show="0.000000000"/>
    <field name="frame.time_relative" showname="Time since reference or first frame: 0.000000000 seconds" size="0" pos="0" show="0.000000000"/>
    <field name="frame.number" showname="Frame Number: 1" size="0" pos="0" show="1"/>
    <field name="frame.len" showname="Frame Length: 188 bytes (1504 bits)" size="0" pos="0" show="188"/>
    <field name="frame.cap_len" showname="Capture Length: 188 bytes (1504 bits)" size="0" pos="0" show="188"/>
    <field name="frame.marked" showname="Frame is marked: False" size="0" pos="0" show="0"/>
    <field name="frame.ignored" showname="Frame is ignored: False" size="0" pos="0" show="0"/>
    <field name="frame.protocols" showname="Protocols in frame: mtp3:sccp:tcap:camel" size="0" pos="0" show="mtp3:sccp:tcap:camel"/>
  </proto>
  <proto name="mtp3" showname="Message Transfer Part Level 3" size="5" pos="0">
    <field name="" show="Service information octet" size="1" pos="0" value="c3">
      <field name="mtp3.network_indicator" showname="11.. .... = Network indicator: Reserved for national use (0x03)" size="1" pos="0" show="0x03" value="3" unmaskedvalue="c3"/>
      <field name="mtp3.spare" showname="..00 .... = Spare: 0x00" size="1" pos="0" show="0x00" value="0" unmaskedvalue="c3"/>
      <field name="mtp3.service_indicator" showname=".... 0011 = Service indicator: SCCP (0x03)" size="1" pos="0" show="0x03" value="3" unmaskedvalue="c3"/>
    </field>
    <field name="" show="Routing label" size="4" pos="1" value="8c027dc0">
      <field name="mtp3.pc" showname="PC: 500" hide="yes" size="4" pos="1" show="500" value="8c027dc0"/>
      <field name="mtp3.pc" showname="PC: 652" hide="yes" size="4" pos="1" show="652" value="8c027dc0"/>
      <field name="mtp3.dpc" showname=".... .... .... .... ..00 0010 1000 1100 = DPC: 652" size="4" pos="1" show="652" value="28C" unmaskedvalue="8c027dc0"/>
      <field name="mtp3.opc" showname=".... 0000 0111 1101 00.. .... .... .... = OPC: 500" size="4" pos="1" show="500" value="1F4" unmaskedvalue="8c027dc0"/>
      <field name="mtp3.sls" showname="1100 .... .... .... .... .... .... .... = Signalling Link Selector: 12" size="4" pos="1" show="12" value="C" unmaskedvalue="8c027dc0"/>
    </field>
  </proto>
  <proto name="sccp" showname="Signalling Connection Control Part" size="183" pos="5">
    <field name="sccp.message_type" showname="Message Type: Unitdata (0x09)" size="1" pos="5" show="0x09" value="09"/>
    <field name="sccp.class" showname=".... 0001 = Class: 0x01" size="1" pos="6" show="0x01" value="1" unmaskedvalue="01"/>
    <field name="sccp.handling" showname="0000 .... = Message handling: No special options (0x00)" size="1" pos="6" show="0x00" value="0" unmaskedvalue="01"/>
    <field name="sccp.variable_pointer1" showname="Pointer to first Mandatory Variable parameter: 3" size="1" pos="7" show="3" value="03"/>
    <field name="sccp.variable_pointer2" showname="Pointer to second Mandatory Variable parameter: 14" size="1" pos="8" show="14" value="0e"/>
    <field name="sccp.variable_pointer3" showname="Pointer to third Mandatory Variable parameter: 25" size="1" pos="9" show="25" value="19"/>
    <field name="sccp.parameter_length" showname="Called Party Address length: 11" hide="yes" size="1" pos="10" show="11" value="0b"/>
    <field name="" show="Called Party address (11 bytes)" size="11" pos="11" value="1292001204198902004525">
      <field name="" show="Address Indicator" size="1" pos="11" value="12">
        <field name="sccp.called.reserved" showname="0... .... = Reserved for national use: 0x00" size="1" pos="11" show="0x00" value="0" unmaskedvalue="12"/>
        <field name="sccp.called.ri" showname=".0.. .... = Routing Indicator: Route on GT (0x00)" size="1" pos="11" show="0x00" value="0" unmaskedvalue="12"/>
        <field name="sccp.called.gti" showname="..01 00.. = Global Title Indicator: Translation Type, Numbering Plan, Encoding Scheme, and Nature of Address Indicator included (0x04)" size="1" pos="11" show="0x04" value="4" unmaskedvalue="12"/>
        <field name="sccp.called.ssni" showname=".... ..1. = SubSystem Number Indicator: SSN present (0x01)" size="1" pos="11" show="0x01" value="1" unmaskedvalue="12"/>
        <field name="sccp.called.pci" showname=".... ...0 = Point Code Indicator: Point Code not present (0x00)" size="1" pos="11" show="0x00" value="0" unmaskedvalue="12"/>
      </field>
      <field name="sccp.called.ssn" showname="SubSystem Number: CAP (146)" size="1" pos="12" show="146" value="92"/>
      <field name="sccp.ssn" showname="Called or Calling SubSystem Number: CAP (146)" hide="yes" size="1" pos="12" show="146" value="92"/>
      <field name="" show="Linked to TCAP, TCAP SSN linked to CAMEL" size="1" pos="12" value="92"/>
      <field name="" show="Global Title 0x4 (9 bytes)" size="9" pos="13" value="001204198902004525">
        <field name="sccp.called.tt" showname="Translation Type: 0x00" size="1" pos="13" show="0x00" value="00"/>
        <field name="sccp.called.np" showname="0001 .... = Numbering Plan: ISDN/telephony (0x01)" size="1" pos="14" show="0x01" value="1" unmaskedvalue="12"/>
        <field name="sccp.called.es" showname=".... 0010 = Encoding Scheme: BCD, even number of digits (0x02)" size="1" pos="14" show="0x02" value="2" unmaskedvalue="12"/>
        <field name="sccp.called.nai" showname=".000 0100 = Nature of Address Indicator: International number (0x04)" size="1" pos="15" show="0x04" value="4" unmaskedvalue="04"/>
        <field name="sccp.called.digits" showname="Called Party Digits: 919820005452" size="6" pos="16" show="919820005452" value="198902004525">
          <field name="sccp.digits" showname="Called or Calling GT Digits: 919820005452" size="6" pos="16" show="919820005452" value="198902004525"/>
          <field name="sccp.called.digits.length" showname="Number of Called Party Digits: 12" size="6" pos="16" show="12" value="198902004525"/>
          <field name="" show="Country Code: 91 India (Republic of) (length 2)" size="1" pos="16" value="19"/>
        </field>
      </field>
    </field>
    <field name="sccp.parameter_length" showname="Calling Party Address length: 11" hide="yes" size="1" pos="22" show="11" value="0b"/>
    <field name="" show="Calling Party address (11 bytes)" size="11" pos="23" value="1292001204198902024500">
      <field name="" show="Address Indicator" size="1" pos="23" value="12">
        <field name="sccp.calling.reserved" showname="0... .... = Reserved for national use: 0x00" size="1" pos="23" show="0x00" value="0" unmaskedvalue="12"/>
        <field name="sccp.calling.ri" showname=".0.. .... = Routing Indicator: Route on GT (0x00)" size="1" pos="23" show="0x00" value="0" unmaskedvalue="12"/>
        <field name="sccp.calling.gti" showname="..01 00.. = Global Title Indicator: Translation Type, Numbering Plan, Encoding Scheme, and Nature of Address Indicator included (0x04)" size="1" pos="23" show="0x04" value="4" unmaskedvalue="12"/>
        <field name="sccp.calling.ssni" showname=".... ..1. = SubSystem Number Indicator: SSN present (0x01)" size="1" pos="23" show="0x01" value="1" unmaskedvalue="12"/>
        <field name="sccp.calling.pci" showname=".... ...0 = Point Code Indicator: Point Code not present (0x00)" size="1" pos="23" show="0x00" value="0" unmaskedvalue="12"/>
      </field>
      <field name="sccp.calling.ssn" showname="SubSystem Number: CAP (146)" size="1" pos="24" show="146" value="92"/>
      <field name="sccp.ssn" showname="Called or Calling SubSystem Number: CAP (146)" hide="yes" size="1" pos="24" show="146" value="92"/>
      <field name="" show="Linked to TCAP, TCAP SSN linked to CAMEL" size="1" pos="24" value="92"/>
      <field name="" show="Global Title 0x4 (9 bytes)" size="9" pos="25" value="001204198902024500">
        <field name="sccp.calling.tt" showname="Translation Type: 0x00" size="1" pos="25" show="0x00" value="00"/>
        <field name="sccp.calling.np" showname="0001 .... = Numbering Plan: ISDN/telephony (0x01)" size="1" pos="26" show="0x01" value="1" unmaskedvalue="12"/>
        <field name="sccp.calling.es" showname=".... 0010 = Encoding Scheme: BCD, even number of digits (0x02)" size="1" pos="26" show="0x02" value="2" unmaskedvalue="12"/>
        <field name="sccp.calling.nai" showname=".000 0100 = Nature of Address Indicator: International number (0x04)" size="1" pos="27" show="0x04" value="4" unmaskedvalue="04"/>
        <field name="sccp.calling.digits" showname="Calling Party Digits: 919820205400" size="6" pos="28" show="919820205400" value="198902024500">
          <field name="sccp.digits" showname="Called or Calling GT Digits: 919820205400" size="6" pos="28" show="919820205400" value="198902024500"/>
          <field name="sccp.calling.digits.length" showname="Number of Calling Party Digits: 12" size="6" pos="28" show="12" value="198902024500"/>
          <field name="" show="Country Code: 91 India (Republic of) (length 2)" size="1" pos="28" value="19"/>
        </field>
      </field>
    </field>
    <field name="sccp.parameter_length" showname="Data length: 153" hide="yes" size="1" pos="34" show="153" value="99"/>
  </proto>
  <proto name="tcap" showname="Transaction Capabilities Application Part" size="153" pos="35">
    <field name="tcap.begin" showname="begin" size="150" pos="38" show="" value="">
      <field name="" show="Source Transaction ID" size="6" pos="38" value="4804ac00007f">
        <field name="tcap.tid" showname="Transaction Id: ac00007f" hide="yes" size="4" pos="40" show="ac:00:00:7f" value="ac00007f"/>
        <field name="tcap.otid" showname="otid: ac00007f" size="4" pos="40" show="ac:00:00:7f" value="ac00007f"/>
      </field>
      <field name="tcap.oid" showname="oid: 0.0.17.773.1.1.1 (id-as-dialogue)" size="7" pos="50" show="0.0.17.773.1.1.1" value="00118605010101"/>
      <field name="tcap.dialogueRequest" showname="dialogueRequest" size="15" pos="61" show="" value="">
        <field name="ber.bitstring.padding" showname="Padding: 7" size="1" pos="63" show="7" value="07"/>
        <field name="tcap.protocol_version" showname="protocol-version: 80 (version1)" size="1" pos="64" show="80" value="80">
          <field name="tcap.version1" showname="1... .... = version1: True" size="1" pos="64" show="1" value="1" unmaskedvalue="80"/>
        </field>
        <field name="tcap.application_context_name" showname="application-context-name: 0.4.0.0.1.0.50.1 (CAP-v2-gsmSSF-to-gsmSCF-AC)" size="7" pos="69" show="0.4.0.0.1.0.50.1" value="04000001003201"/>
      </field>
      <field name="tcap.components" showname="components: 1 item" size="110" pos="78" show="1" value="a16a020100020100306280013382070290890210782983070313298165569785010a9c010c9f320804241040182216f4bf33028000bf3417020101810791198902074514a309800704f402138a1a069f3605dbab2200019f3707911989020245009f390802706070127333000000">
        <field name="tcap.Component" showname="Component: invoke (1)" size="106" pos="80" show="1" value="020100020100306280013382070290890210782983070313298165569785010a9c010c9f320804241040182216f4bf33028000bf3417020101810791198902074514a309800704f402138a1a069f3605dbab2200019f3707911989020245009f39080270607012733300">
          <field name="tcap.invoke" showname="invoke" size="106" pos="80" show="" value="">
            <field name="tcap.invokeID" showname="invokeID: 0" size="1" pos="82" show="0" value="00"/>
            <field name="tcap.opCode" showname="opCode: localValue (0)" size="3" pos="83" show="0" value="020100">
              <field name="tcap.localValue" showname="localValue: 0" size="1" pos="85" show="0" value="00"/>
            </field>
            <field name="" show="CONSTRUCTOR" size="100" pos="86" value="306280013382070290890210782983070313298165569785010a9c010c9f320804241040182216f4bf33028000bf3417020101810791198902074514a309800704f402138a1a069f3605dbab2200019f3707911989020245009f39080270607012733300">
              <field name="tcap.msgtype" showname="CONSTRUCTOR Tag" size="1" pos="86" show="0x10" value="30"/>
              <field name="tcap.msgtype" showname="Tag: 0x00" size="1" pos="86" show="0x00" value="30"/>
              <field name="tcap.len" showname="Length: 98" size="1" pos="87" show="98" value="62"/>
              <field name="" show="Parameter (0x00)" size="3" pos="88" value="800133">
                <field name="tcap.msgtype" showname="Tag: 0x00" size="1" pos="88" show="0x00" value="80"/>
                <field name="tcap.len" showname="Length: 1" size="1" pos="89" show="1" value="01"/>
              </field>
              <field name="tcap.data" showname="Data: 33" size="1" pos="90" show="33" value="33"/>
              <field name="" show="Parameter (0x02)" size="9" pos="91" value="820702908902107829">
                <field name="tcap.msgtype" showname="Tag: 0x02" size="1" pos="91" show="0x02" value="82"/>
                <field name="tcap.len" showname="Length: 7" size="1" pos="92" show="7" value="07"/>
              </field>
              <field name="tcap.data" showname="Data: 02" size="1" pos="93" show="02" value="02"/>
              <field name="" show="Parameter (0x03)" size="9" pos="100" value="830703132981655697">
                <field name="tcap.msgtype" showname="Tag: 0x03" size="1" pos="100" show="0x03" value="83"/>
                <field name="tcap.len" showname="Length: 7" size="1" pos="101" show="7" value="07"/>
              </field>
              <field name="tcap.data" showname="Data: 03" size="1" pos="102" show="03" value="03"/>
              <field name="" show="Parameter (0x05)" size="3" pos="109" value="85010a">
                <field name="tcap.msgtype" showname="Tag: 0x05" size="1" pos="109" show="0x05" value="85"/>
                <field name="tcap.len" showname="Length: 1" size="1" pos="110" show="1" value="01"/>
              </field>
              <field name="tcap.data" showname="Data: 0a" size="1" pos="111" show="0a" value="0a"/>
              <field name="" show="Parameter (0x1c)" size="3" pos="112" value="9c010c">
                <field name="tcap.msgtype" showname="Tag: 0x1c" size="1" pos="112" show="0x1c" value="9c"/>
                <field name="tcap.len" showname="Length: 1" size="1" pos="113" show="1" value="01"/>
              </field>
              <field name="tcap.data" showname="Data: 0c" size="1" pos="114" show="0c" value="0c"/>
              <field name="" show="Parameter (0x32)" size="11" pos="115" value="9f320804241040182216f4">
                <field name="tcap.msgtype" showname="Tag: 0x32" size="2" pos="115" show="0x32" value="9f32"/>
                <field name="tcap.len" showname="Length: 8" size="1" pos="117" show="8" value="08"/>
              </field>
              <field name="tcap.data" showname="Data: 04" size="1" pos="118" show="04" value="04"/>
              <field name="" show="CONSTRUCTOR" size="5" pos="126" value="bf33028000">
                <field name="tcap.msgtype" showname="CONSTRUCTOR Tag" size="2" pos="126" show="0x33" value="bf33"/>
                <field name="tcap.msgtype" showname="Tag: 0x02" size="2" pos="126" show="0x02" value="bf33"/>
                <field name="tcap.len" showname="Length: 2" size="1" pos="128" show="2" value="02"/>
                <field name="" show="Parameter (0x00)" size="2" pos="129" value="8000">
                  <field name="tcap.msgtype" showname="Tag: 0x00" size="1" pos="129" show="0x00" value="80"/>
                  <field name="tcap.len" showname="Length: 0" size="1" pos="130" show="0" value="00"/>
                </field>
              </field>
              <field name="" show="CONSTRUCTOR" size="26" pos="131" value="bf3417020101810791198902074514a309800704f402138a1a06">
                <field name="tcap.msgtype" showname="CONSTRUCTOR Tag" size="2" pos="131" show="0x34" value="bf34"/>
                <field name="tcap.msgtype" showname="Tag: 0x02" size="2" pos="131" show="0x02" value="bf34"/>
                <field name="tcap.len" showname="Length: 23" size="1" pos="133" show="23" value="17"/>
                <field name="" show="Parameter (0x02)" size="3" pos="134" value="020101">
                  <field name="tcap.msgtype" showname="Tag: 0x02" size="1" pos="134" show="0x02" value="02"/>
                  <field name="tcap.len" showname="Length: 1" size="1" pos="135" show="1" value="01"/>
                </field>
                <field name="tcap.data" showname="Data: 01" size="1" pos="136" show="01" value="01"/>
                <field name="" show="Parameter (0x01)" size="9" pos="137" value="810791198902074514">
                  <field name="tcap.msgtype" showname="Tag: 0x01" size="1" pos="137" show="0x01" value="81"/>
                  <field name="tcap.len" showname="Length: 7" size="1" pos="138" show="7" value="07"/>
                </field>
                <field name="tcap.data" showname="Data: 91" size="1" pos="139" show="91" value="91"/>
                <field name="" show="CONSTRUCTOR" size="11" pos="146" value="a309800704f402138a1a06">
                  <field name="tcap.msgtype" showname="CONSTRUCTOR Tag" size="1" pos="146" show="0x03" value="a3"/>
                  <field name="tcap.msgtype" showname="Tag: 0x02" size="1" pos="146" show="0x02" value="a3"/>
                  <field name="tcap.len" showname="Length: 9" size="1" pos="147" show="9" value="09"/>
                  <field name="" show="Parameter (0x00)" size="9" pos="148" value="800704f402138a1a06">
                    <field name="tcap.msgtype" showname="Tag: 0x00" size="1" pos="148" show="0x00" value="80"/>
                    <field name="tcap.len" showname="Length: 7" size="1" pos="149" show="7" value="07"/>
                  </field>
                  <field name="tcap.data" showname="Data: 04" size="1" pos="150" show="04" value="04"/>
                </field>
              </field>
              <field name="" show="Parameter (0x36)" size="8" pos="157" value="9f3605dbab220001">
                <field name="tcap.msgtype" showname="Tag: 0x36" size="2" pos="157" show="0x36" value="9f36"/>
                <field name="tcap.len" showname="Length: 5" size="1" pos="159" show="5" value="05"/>
              </field>
              <field name="tcap.data" showname="Data: db" size="1" pos="160" show="db" value="db"/>
              <field name="" show="Parameter (0x37)" size="10" pos="165" value="9f370791198902024500">
                <field name="tcap.msgtype" showname="Tag: 0x37" size="2" pos="165" show="0x37" value="9f37"/>
                <field name="tcap.len" showname="Length: 7" size="1" pos="167" show="7" value="07"/>
              </field>
              <field name="tcap.data" showname="Data: 91" size="1" pos="168" show="91" value="91"/>
              <field name="" show="Parameter (0x39)" size="11" pos="175" value="9f39080270607012733300">
                <field name="tcap.msgtype" showname="Tag: 0x39" size="2" pos="175" show="0x39" value="9f39"/>
                <field name="tcap.len" showname="Length: 8" size="1" pos="177" show="8" value="08"/>
              </field>
              <field name="tcap.data" showname="Data: 02" size="1" pos="178" show="02" value="02"/>
            </field>
          </field>
        </field>
      </field>
    </field>
  </proto>
  <proto name="camel" showname="Camel" size="108" pos="78">
    <field name="camel.invoke" showname="invoke" size="106" pos="80" show="" value="">
      <field name="camel.invokeId" showname="invokeId: present (0)" size="3" pos="80" show="0" value="020100">
        <field name="camel.present" showname="present: 0" size="1" pos="82" show="0" value="00"/>
      </field>
      <field name="camel.opcode" showname="opcode: local (0)" size="3" pos="83" show="0" value="020100">
        <field name="camel.local" showname="local: initialDP (0)" size="1" pos="85" show="0" value="00"/>
      </field>
      <field name="camel.InitialDPArg" showname="InitialDPArg" size="100" pos="86" show="" value="">
        <field name="camel.serviceKey" showname="serviceKey: 51" size="1" pos="90" show="51" value="33"/>
        <field name="camel.calledPartyNumber" showname="calledPartyNumber: 02908902107829" size="7" pos="93" show="02:90:89:02:10:78:29" value="02908902107829">
          <field name="isup.isdn_odd_even_indicator" showname="0... .... = Odd/even indicator: even number of address signals" size="1" pos="93" show="0" value="0" unmaskedvalue="02"/>
          <field name="isup.called_party_nature_of_address_indicator" showname=".000 0010 = Nature of address indicator: unknown (national use) (2)" size="1" pos="93" show="2" value="2" unmaskedvalue="02"/>
          <field name="isup.inn_indicator" showname="1... .... = INN indicator: routing to internal network number not allowed" size="1" pos="94" show="1" value="1" unmaskedvalue="90"/>
          <field name="isup.numbering_plan_indicator" showname=".001 .... = Numbering plan indicator: ISDN (Telephony) numbering plan (1)" size="1" pos="94" show="1" value="1" unmaskedvalue="90"/>
          <field name="" show="Called Party Number: 9820018792" size="5" pos="95" value="8902107829">
            <field name="isup.called_party_odd_address_signal_digit" showname=".... 1001 = Address signal digit: 9 (9)" size="1" pos="95" show="9" value="9" unmaskedvalue="89"/>
            <field name="isup.called_party_even_address_signal_digit" showname="1000 .... = Address signal digit: 8 (8)" size="1" pos="95" show="8" value="8" unmaskedvalue="89"/>
            <field name="isup.called_party_odd_address_signal_digit" showname=".... 0010 = Address signal digit: 2 (2)" size="1" pos="96" show="2" value="2" unmaskedvalue="02"/>
            <field name="isup.called_party_even_address_signal_digit" showname="0000 .... = Address signal digit: 0 (0)" size="1" pos="96" show="0" value="0" unmaskedvalue="02"/>
            <field name="isup.called_party_odd_address_signal_digit" showname=".... 0000 = Address signal digit: 0 (0)" size="1" pos="97" show="0" value="0" unmaskedvalue="10"/>
            <field name="isup.called_party_even_address_signal_digit" showname="0001 .... = Address signal digit: 1 (1)" size="1" pos="97" show="1" value="1" unmaskedvalue="10"/>
            <field name="isup.called_party_odd_address_signal_digit" showname=".... 1000 = Address signal digit: 8 (8)" size="1" pos="98" show="8" value="8" unmaskedvalue="78"/>
            <field name="isup.called_party_even_address_signal_digit" showname="0111 .... = Address signal digit: 7 (7)" size="1" pos="98" show="7" value="7" unmaskedvalue="78"/>
            <field name="isup.called_party_odd_address_signal_digit" showname=".... 1001 = Address signal digit: 9 (9)" size="1" pos="99" show="9" value="9" unmaskedvalue="29"/>
            <field name="isup.called_party_even_address_signal_digit" showname="0010 .... = Address signal digit: 2 (2)" size="1" pos="99" show="2" value="2" unmaskedvalue="29"/>
            <field name="e164.called_party_number.digits" showname="E.164 Called party number digits: 9820018792" size="5" pos="95" show="9820018792" value="8902107829"/>
            <field name="isup.called" showname="ISUP Called Number: 9820018792" hide="yes" size="0" pos="100" show="9820018792"/>
          </field>
        </field>
        <field name="camel.callingPartyNumber" showname="callingPartyNumber: 03132981655697" size="7" pos="102" show="03:13:29:81:65:56:97" value="03132981655697">
          <field name="isup.isdn_odd_even_indicator" showname="0... .... = Odd/even indicator: even number of address signals" size="1" pos="102" show="0" value="0" unmaskedvalue="03"/>
          <field name="isup.calling_party_nature_of_address_indicator" showname=".000 0011 = Nature of address indicator: national (significant) number (3)" size="1" pos="102" show="3" value="3" unmaskedvalue="03"/>
          <field name="isup.ni_indicator" showname="0... .... = NI indicator: complete" size="1" pos="103" show="0" value="0" unmaskedvalue="13"/>
          <field name="isup.numbering_plan_indicator" showname=".001 .... = Numbering plan indicator: ISDN (Telephony) numbering plan (1)" size="1" pos="103" show="1" value="1" unmaskedvalue="13"/>
          <field name="isup.address_presentation_restricted_indicator" showname=".... 00.. = Address presentation restricted indicator: presentation allowed (0)" size="1" pos="103" show="0" value="0" unmaskedvalue="13"/>
          <field name="isup.screening_indicator" showname=".... ..11 = Screening indicator: network provided (3)" size="1" pos="103" show="3" value="3" unmaskedvalue="13"/>
          <field name="" show="Calling Party Number: 9218566579" size="5" pos="104" value="2981655697">
            <field name="isup.calling_party_odd_address_signal_digit" showname=".... 1001 = Address signal digit: 9 (9)" size="1" pos="104" show="9" value="9" unmaskedvalue="29"/>
            <field name="isup.calling_party_even_address_signal_digit" showname="0010 .... = Address signal digit: 2 (2)" size="1" pos="104" show="2" value="2" unmaskedvalue="29"/>
            <field name="isup.calling_party_odd_address_signal_digit" showname=".... 0001 = Address signal digit: 1 (1)" size="1" pos="105" show="1" value="1" unmaskedvalue="81"/>
            <field name="isup.calling_party_even_address_signal_digit" showname="1000 .... = Address signal digit: 8 (8)" size="1" pos="105" show="8" value="8" unmaskedvalue="81"/>
            <field name="isup.calling_party_odd_address_signal_digit" showname=".... 0101 = Address signal digit: 5 (5)" size="1" pos="106" show="5" value="5" unmaskedvalue="65"/>
            <field name="isup.calling_party_even_address_signal_digit" showname="0110 .... = Address signal digit: 6 (6)" size="1" pos="106" show="6" value="6" unmaskedvalue="65"/>
            <field name="isup.calling_party_odd_address_signal_digit" showname=".... 0110 = Address signal digit: 6 (6)" size="1" pos="107" show="6" value="6" unmaskedvalue="56"/>
            <field name="isup.calling_party_even_address_signal_digit" showname="0101 .... = Address signal digit: 5 (5)" size="1" pos="107" show="5" value="5" unmaskedvalue="56"/>
            <field name="isup.calling_party_odd_address_signal_digit" showname=".... 0111 = Address signal digit: 7 (7)" size="1" pos="108" show="7" value="7" unmaskedvalue="97"/>
            <field name="isup.calling_party_even_address_signal_digit" showname="1001 .... = Address signal digit: 9 (9)" size="1" pos="108" show="9" value="9" unmaskedvalue="97"/>
            <field name="e164.calling_party_number.digits" showname="E.164 Calling party number digits: 9218566579" size="5" pos="104" show="9218566579" value="2981655697"/>
            <field name="isup.calling" showname="ISUP Calling Number: 9218566579" hide="yes" size="0" pos="109" show="9218566579"/>
          </field>
        </field>
        <field name="camel.callingPartysCategory" showname="callingPartysCategory: ordinary calling subscriber (10)" size="1" pos="111" show="10" value="0a"/>
        <field name="camel.eventTypeBCSM" showname="eventTypeBCSM: termAttemptAuthorized (12)" size="1" pos="114" show="12" value="0c"/>
        <field name="camel.iMSI" showname="iMSI: 04241040182216f4" size="8" pos="118" show="04:24:10:40:18:22:16:f4" value="04241040182216f4"/>
        <field name="gsm_map.tbcd_digits" showname="TBCD digits: 404201048122614" size="8" pos="118" show="404201048122614" value="04241040182216f4"/>
        <field name="camel.subscriberState" showname="subscriberState: assumedIdle (0)" size="0" pos="131" show="0">
          <field name="gsm_map.ms.assumedIdle" showname="assumedIdle" size="0" pos="131" show="" value=""/>
        </field>
        <field name="camel.locationInformation" showname="locationInformation" size="23" pos="134" show="" value="">
          <field name="gsm_map.ms.ageOfLocationInformation" showname="ageOfLocationInformation: 1" size="1" pos="136" show="1" value="01"/>
          <field name="gsm_map.ms.vlr_number" showname="vlr-number: 91198902074514" size="7" pos="139" show="91:19:89:02:07:45:14" value="91198902074514">
            <field name="gsm_map.extension" showname="1... .... = Extension: No Extension" size="1" pos="139" show="1" value="1" unmaskedvalue="91"/>
            <field name="gsm_map.nature_of_number" showname=".001 .... = Nature of number: International Number (0x01)" size="1" pos="139" show="0x01" value="1" unmaskedvalue="91"/>
            <field name="gsm_map.number_plan" showname=".... 0001 = Number plan: ISDN/Telephony Numbering (Rec ITU-T E.164) (0x01)" size="1" pos="139" show="0x01" value="1" unmaskedvalue="91"/>
            <field name="gsm_map.address.digits" showname="Address digits: 919820705441" size="6" pos="140" show="919820705441" value="198902074514"/>
            <field name="" show="Country Code: 91 India (Republic of) (length 2)" size="1" pos="140" value="19"/>
          </field>
          <field name="gsm_map.ms.cellGlobalIdOrServiceAreaIdOrLAI" showname="cellGlobalIdOrServiceAreaIdOrLAI: cellGlobalIdOrServiceAreaIdFixedLength (0)" size="7" pos="150" show="0" value="04f402138a1a06">
            <field name="gsm_map.cellGlobalIdOrServiceAreaIdFixedLength" showname="cellGlobalIdOrServiceAreaIdFixedLength: 04f402138a1a06" size="7" pos="150" show="04:f4:02:13:8a:1a:06" value="04f402138a1a06"/>
          </field>
        </field>
        <field name="camel.callReferenceNumber" showname="callReferenceNumber: dbab220001" size="5" pos="160" show="db:ab:22:00:01" value="dbab220001"/>
        <field name="camel.mscAddress" showname="mscAddress: 91198902024500" size="7" pos="168" show="91:19:89:02:02:45:00" value="91198902024500">
          <field name="gsm_map.extension" showname="1... .... = Extension: No Extension" size="1" pos="168" show="1" value="1" unmaskedvalue="91"/>
          <field name="gsm_map.nature_of_number" showname=".001 .... = Nature of number: International Number (0x01)" size="1" pos="168" show="0x01" value="1" unmaskedvalue="91"/>
          <field name="gsm_map.number_plan" showname=".... 0001 = Number plan: ISDN/Telephony Numbering (Rec ITU-T E.164) (0x01)" size="1" pos="168" show="0x01" value="1" unmaskedvalue="91"/>
          <field name="gsm_map.address.digits" showname="Address digits: 919820205400" size="6" pos="169" show="919820205400" value="198902024500"/>
          <field name="" show="Country Code: 91 India (Republic of) (length 2)" size="1" pos="169" value="19"/>
        </field>
        <field name="camel.timeAndTimezone" showname="timeAndTimezone: 0270607012733300" size="8" pos="178" show="02:70:60:70:12:73:33:00" value="0270607012733300"/>
      </field>
    </field>
  </proto>
</packet>


</pdml>
XML;
?>
