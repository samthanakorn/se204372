import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("Thanakorn Kuankure");
        groupMembers.add("Chusana Wilaivanichwong");
        groupMembers.add("Yutthana Piyawongwatthana");
        groupMembers.add("Worakit Ingrungruengluet");
        //PUT YOUR NAME HERE
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}
