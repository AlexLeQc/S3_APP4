public class chef {
    private static chef instance;

    private chef() {

    }

    public static chef getInstance(){
        if (instance == null){
            instance = new chef();

        }
        return instance;
    }


}
